<?php

namespace App\Http\Controllers;

use App\Category;
use App\CategoryFilm;
use App\Film;
use App\FilmState;
use App\Rental;
use App\State;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$films = Film::with('categories')->with('states')->get();
        $films = Film::with(['categories', 'states'])->get();
        return view('film.index')->with(compact('films'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $states = State::all();
        return view('film.create')->with(compact('categories', 'states'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $rules = array(
            'name' => 'required|min:4|unique:films,name',
            'description' => 'required|min:10',
            'duration' =>'required|numeric|min:0',
            'year' => 'required|numeric',
            'url' => 'required|url',
            'starts' => 'required|numeric'
        );

        $mensajes = array(
            'name.required' => 'Es necesario ingresar el nombre de la película',
            'name.min' => 'El nombre de la película debe tener por lo menos 4 caracteres',
            'name.unique' => 'Ya existe una película con este nombre',
            'description.required' => 'Es necesario ingresar la descripción de la película',
            'description.min' => 'La descripción de la película debe tener minimo 10 caracteres',
            'duration.required' => 'Es necesario ingresar una duración de la película',
            'duration.numeric' => 'La duracion de la película debe ser numérico',
            'duration.min' => 'La duracion debe ser minimo 0 minutos',
            'year.required' => 'Es necesario ingresar un año de estreno de la película',
            'year.numeric' => 'El año de estreno de la película debe ser numérico',
            'url.required' => 'Es necesario ingresar un url de la película',
            'url.url' => 'El url de la película debe ser válido',
            'starts.required' => 'Es necesario ingresar una calificacion de la película',
            'starts.numeric' => 'La calificacion de la película debe ser numérico',
        );
        $validator = Validator::make($request->all(), $rules, $mensajes);

        // TODO: Validar el rol de usuario
        $validator->after(function ($validator){
            /*if (Auth::user()->role_id > 1 ) {
                $validator->errors()->add('role', 'No tiene permisos para hacer esta acción');
            }*/
        });

        if (!$validator->fails()){
            $film = Film::create([
                'name' => $request->get('name'),
                'description' => $request->get('description'),
                'duration' => $request->get('duration'),
                'year' => $request->get('year'),
                'url' => $request->get('url'),
                'starts' => $request->get('starts'),
            ]);

            if ( $request->file('image') )
            {
                $path = public_path().'/admin/assets/images/films';
                $extension = $request->file('image')->getClientOriginalExtension();
                $filename = $film->id . '.' . $extension;
                $request->file('image')->move($path, $filename);
                $film->image = $filename;
            } else {
                $validator->after(function ($validator){
                    $validator->errors()->add('image', 'Es necesario ingresar una imagen');
                });
            }

            foreach ( $request->get('states') as $state )
            {
                $film_states = FilmState::create([
                    'film_id' => $film->id,
                    'state_id' => $state,
                ]);
                $film_states->save();
            }

            foreach ( $request->get('categories') as $category )
            {
                $category_films = CategoryFilm::create([
                    'category_id' => $category,
                    'film_id' => $film->id,
                ]);
                $category_films->save();
            }

            $film->save();
        }

        return response()->json($validator->messages(),200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $film = Film::with('categories')->find($id);
        $categories = Category::all();
        $cant = count($categories)/3;
        return view('film.show')->with(compact('film', 'categories', 'cant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function edit( $id )
    {
        //dd($id);
        $categories = Category::all();
        $states = State::all();
        $film = Film::with('states')->with('categories')->find($id);
        return view('film.edit')->with(compact('categories', 'states', 'film'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $rules = array(
            'name' => 'required|min:4',
            'description' => 'required|min:10',
            'duration' =>'required|numeric|min:0',
            'year' => 'required|numeric',
            'url' => 'required|url',
            'starts' => 'required|numeric'
        );

        $mensajes = array(
            'name.required' => 'Es necesario ingresar el nombre de la película',
            'name.min' => 'El nombre de la película debe tener por lo menos 4 caracteres',
            'description.required' => 'Es necesario ingresar la descripción de la película',
            'description.min' => 'La descripción de la película debe tener minimo 10 caracteres',
            'duration.required' => 'Es necesario ingresar una duración de la película',
            'duration.numeric' => 'La duracion de la película debe ser numérico',
            'duration.min' => 'La duracion debe ser minimo 0 minutos',
            'year.required' => 'Es necesario ingresar un año de estreno de la película',
            'year.numeric' => 'El año de estreno de la película debe ser numérico',
            'url.required' => 'Es necesario ingresar un url de la película',
            'url.url' => 'El url de la película debe ser válido',
            'starts.required' => 'Es necesario ingresar una calificacion de la película',
            'starts.numeric' => 'La calificacion de la película debe ser numérico',
        );
        $validator = Validator::make($request->all(), $rules, $mensajes);

        // TODO: Validar el rol de usuario
        $validator->after(function ($validator){
            /*if (Auth::user()->role_id > 1 ) {
                $validator->errors()->add('role', 'No tiene permisos para hacer esta acción');
            }*/
        });

        if (!$validator->fails()){
            $film = Film::find($request->get('id'));
            $film->name = $request->get('name');
            $film->description = $request->get('description');
            $film->duration = $request->get('duration');
            $film->year = $request->get('year');
            $film->url = $request->get('url');
            $film->starts = $request->get('starts');

            if ( $request->file('image') )
            {
                $path = public_path().'/admin/assets/images/films';
                $extension = $request->file('image')->getClientOriginalExtension();
                $filename = $film->id . '.' . $extension;
                $request->file('image')->move($path, $filename);
                $film->image = $filename;
            }

            // TODO: Eliminamos los estados y los volvemos a ingresar
            $deleteFilmStates = FilmState::where('film_id', $film->id)->delete();

            foreach ( $request->get('states') as $state )
            {
                $film_states = FilmState::create([
                    'film_id' => $film->id,
                    'state_id' => $state,
                ]);
                $film_states->save();
            }

            $deleteCategoryFilms = CategoryFilm::where('film_id', $film->id)->delete();

            foreach ( $request->get('categories') as $category )
            {
                $category_films = CategoryFilm::create([
                    'category_id' => $category,
                    'film_id' => $film->id,
                ]);
                $category_films->save();
            }

            $film->save();
        }

        return response()->json($validator->messages(),200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function destroy(Film $film)
    {
        
    }

    public function filmTop()
    {
        // TODO: Este codigo obtiene el maximo numero de films alquiladas
        $result = DB::table('films')
            ->select(DB::raw('COUNT(rental_films.film_id) as quantity'))
            ->join('rental_films', 'films.id', '=', 'rental_films.film_id')
            ->orderBy('quantity','DESC')
            ->limit('1')
            ->get();
        //dd($result[0]->quantity);

        // TODO: Obtiene las peliculas cuya cantidad sea la maxima
        $result2 = DB::table('films')
            ->select('films.name', 'films.image', 'films.year', DB::raw('COUNT(rental_films.film_id) as quantity'))
            ->join('rental_films', 'films.id', '=', 'rental_films.film_id')
            ->groupBy('films.name', 'films.image', 'films.year')
            ->havingRaw('quantity = '.$result[0]->quantity)
            ->get();
        dd($result2);

    }

    public function estados()
    {
        /*$films = Film::with('states')->get();
        foreach ($films as $film) {
            echo $film->name;
            echo '\r';
            foreach ($film->states as $state) {
                echo $state->name;
                echo '\n';
            }
            echo '\r';
        }*/
        $states = State::all();
        $film = Film::with('states')->with('categories')->find(1);
        //dd($film->states);
        /*$count = 0;
        foreach ( $states as $state )
        {
            foreach ( $film->states as $filmState ) {
                if ($state->id == $filmState->id )
                {
                    echo $filmState->name .'  SELECTED' . '<br>';
                    $count++;
                }
            }
            if ($count == 0) {
                echo $state->name . '<br>';
            }
            $count = 0;
        }*/
        echo $states[1]->name;
        $carbon = Carbon::now();

    }

    public function tests()
    {
        // TODO: Malas practicas
        // TODO: Primer ejemplo de malas practicas
        /*$films = Film::all();
        return view('film.tests')->with(compact('films'));*/
        
        // TODO: Segundo ejemplo de malas practicas
        /*$users = User::all();
        return view('film.tests')->with(compact('users'));*/

        // TODO: Tercer ejemplo de malas practicas
        /*$rentals = Rental::all();
        return view('film.tests')->with(compact('rentals'));*/

        // TODO: Cuarto ejemplo de malas practicas
        $user = User::where('id', 2)->with('rentals')->orderby('rentals.rental_date')->get();
        //dd($user);
        return view('film.tests')->with(compact('user'));

        //dd($films);
    }
    public function testsEL()
    {
        // TODO: Primer ejemplo de Eager and Lazy loading
        /*$films = Film::with(['categories', 'states'])->get();
        return view('film.testsEL')->with(compact('films'));*/
        
        // TODO: Segundo ejemplo de Eager and Lazy loading
        /*$users = User::with(['role'])->get();
        return view('film.testsEL')->with(compact('users'));*/

        // TODO: Tercer ejemplo de Eager and Lazy loading
        //$rentals = Rental::with(['user.role'])->get();

        // TODO: Cuarto ejemplo de Eager and Lazy loading
        $user = User::with('rentals')->find(2);
        //dd($user);

        // TODO: Quinto ejemplo de Eager and Lazy loading
        /*$user = User::with(['rentals' => function($query){
            $query->oldest('rental_date');
            $query->select('rental_date', 'id');
        }])->find(2);*/

        // TODO: Sexto ejemplo de Eager and Lazy loading
        $user = User::find(2);

        //dd($rentals[0]->user->role->name);

        return view('film.testsEL')->with(compact('user'));

    }
}
