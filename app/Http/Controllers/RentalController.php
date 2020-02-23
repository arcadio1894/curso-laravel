<?php

namespace App\Http\Controllers;

use App\Category;
use App\Events\RentalConfirmed;
use App\Film;
use App\Rental;
use App\RentalFilm;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RentalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rentals = Rental::with('films')->where('user_id', Auth::user()->id)->get();
        $categories = Category::all();
        $cant = count($categories)/3;
        //dd($rentals);
        return view('rental.index')->with(compact('rentals', 'categories', 'cant'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rental  $rental
     * @return \Illuminate\Http\Response
     */
    public function show(Rental $rental)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rental  $rental
     * @return \Illuminate\Http\Response
     */
    public function edit(Rental $rental)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rental  $rental
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rental $rental)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rental  $rental
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rental $rental)
    {
        //
    }

    public function addFilm($filmId)
    {
        // TODO: Si hay un rental con estado activo de este usuario entonces agregar al detalle
        $rental = Rental::where('active', 1)->where('user_id', Auth::user()->id)->get();
        $film = Film::find($filmId);
        $value = true;
        $mensaje = 'Ocurrió un error inesperado.';
        if (count($rental) != 0)
        {
            $rentalFound = RentalFilm::where('film_id', $film->id)->where('rental_id', $rental[0]->id)->get();
            //dd($rentalFound);
            if (count($rentalFound) == 0)
            {
                $rental_detail = RentalFilm::create([
                    'rental_id' => $rental[0]->id,
                    'film_id' => $film->id,
                    'price' => $film->price,
                ]);
                $value = false;
                $mensaje = 'Película agregada correctamente.';
            } else {
                $value = true;
                $mensaje = 'La pelicula ya fue agregada.';
            }
            
        } else {
            // TODO: Si no ha un rental entonces crear el rental y agregar el detalle
            $rentalFound = RentalFilm::where('film_id', $film->id)->get();
            if (count($rentalFound) == 0)
            {
                $date = Carbon::now();
                $rental = Rental::create([
                    'user_id' => Auth::user()->id,
                    'rental_date' => $date,
                    'active' => 1,
                ]);
                $rental_detail = RentalFilm::create([
                    'rental_id' => $rental->id,
                    'film_id' => $film->id,
                    'price' => $film->price,
                ]);
                $value = false;
                $mensaje = 'Película agregada correctamente.';
            } else {
                $value = true;
                $mensaje = 'La película ya fue comprada anteriormente.';
            }

        }
        return json_encode(['error' => $value, 'message' => $mensaje]);
    }

    public function confirmationFilm($filmId)
    {
        // TODO: Si hay un rental con estado activo de este usuario entonces agregar al detalle
        $rentals = Rental::where('active', 0)->where('user_id', Auth::user()->id)->get();
        foreach ( $rentals as $rental )
        {
            $rentalDetails = RentalFilm::where('film_id', $filmId)->where('rental_id', $rental->id)->get();
            if (count($rentalDetails) != 0)
            {
                return json_encode(['value' => true]);
            }

        }
        return json_encode(['value' => false]);
    }

    public function confirmation($rentalId)
    {
        //dd('sdsdvnsdfjvnwsvjn');
        // TODO: Si hay un rental con estado activo de este usuario entonces agregar al detalle
        $rental = Rental::find($rentalId);
        //dd($rental);
        $rental->active = 0;
        $rental->save();
        // TODO: Lanzar el evento RentalConfirmed
        event(new RentalConfirmed($rental));
        
        return json_encode(['value' => true]);
    }
}
