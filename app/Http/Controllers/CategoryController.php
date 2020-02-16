<?php

namespace App\Http\Controllers;

use App\Category;
use App\Film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Stmt\Goto_;

class CategoryController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
        /*GOTO: Borrar cuando hagamos el middleware*/
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$categories = Category::withTrashed()->get();
        //$categories = Category::onlyTrashed()->get();
        $categories = Category::all();
        //dd($categories);
        return view('category.index')->with(compact('categories'));
    }

    public function enabled()
    {
        //$categories = Category::withTrashed()->get();
        $categories = Category::onlyTrashed()->get();
        //dd($categories);
        return view('category.enabled')->with(compact('categories'));
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
        
        // TODO: Primero se colocan las reglas
        $rules = array(
            'name' => 'required|min:4|unique:categories,name',
            'description' => 'required|min:10',
        );
        $mensajes = array(
            'name.required' => 'Es necesario ingresar el nombre de la categoría',
            'name.min' => 'El nombre de la categoría debe tener por lo menos 4 caracteres',
            'name.unique' => 'Ya existe una categoría con este nombre',
            'description.required' => 'Es necesario ingresar la descripción de la categoría',
            'description.min' => 'La descrioción de la película debe tener minimo 10 caracteres'
        );
        $validator = Validator::make($request->all(), $rules, $mensajes);

        // TODO: Validar el rol de usuario
        $validator->after(function ($validator){
            /*if (Auth::user()->role_id > 1 ) {
                $validator->errors()->add('role', 'No tiene permisos para hacer esta acción');
            }*/
        });
        
        if (!$validator->fails()){
            $category = Category::create([
                'name' => $request->get('name'),
                'description' => $request->get('description')
            ]);
            $category->save();
        }
        
        return response()->json($validator->messages(),200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::with('films')->find($id);
        $categories = Category::all();
        $cant = count($categories)/3;
        return view('category.show')->with(compact('category', 'categories', 'cant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //dd($request);
        $rules = array(
            'category_id' => 'required|exists:categories,id',
            'nameE' => 'required|min:4',
            'descriptionE' => 'required|min:10',
        );
        $mensajes = array(
            'category_id.required' => 'Es necesario ingresar el id de la categoría',
            'category_id.exists' => 'La categoría no exista en la base de datos',
            'nameE.required' => 'Es necesario ingresar el nombre de la categoría',
            'nameE.min' => 'El nombre de la categoría debe tener por lo menos 4 caracteres',
            'descriptionE.required' => 'Es necesario ingresar la descripción de la categoría',
            'descriptionE.min' => 'La descrioción de la película debe tener minimo 10 caracteres'
        );
        $validator = Validator::make($request->all(), $rules, $mensajes);

        // TODO: Validar el rol de usuario
        $validator->after(function ($validator){
            /*if (Auth::user()->role_id > 1 ) {
                $validator->errors()->add('role', 'No tiene permisos para hacer esta acción');
            }*/
        });

        if (!$validator->fails()){
            $category = Category::find($request->get('category_id'));
            $category->name = $request->get('nameE');
            $category->description = $request->get('descriptionE');
            $category->save();
        }

        return response()->json($validator->messages(),200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $rules = array(
            'category_id' => 'required|exists:categories,id',
        );
        $mensajes = array(
            'category_id.required' => 'Es necesario ingresar el id de la categoría',
            'category_id.exists' => 'La categoría no exista en la base de datos',
        );
        $validator = Validator::make($request->all(), $rules, $mensajes);

        // TODO: Validar el rol de usuario
        $validator->after(function ($validator){
            /*if (Auth::user()->role_id > 1 ) {
                $validator->errors()->add('role', 'No tiene permisos para hacer esta acción');
            }*/
        });

        if (!$validator->fails()){
            $category = Category::find($request->get('category_id'));
            $category->delete();
        }

        return response()->json($validator->messages(),200);
    }

    public function abled(Request $request)
    {
        $rules = array(
            'category_id' => 'required|exists:categories,id',
        );
        $mensajes = array(
            'category_id.required' => 'Es necesario ingresar el id de la categoría',
            'category_id.exists' => 'La categoría no exista en la base de datos',
        );
        $validator = Validator::make($request->all(), $rules, $mensajes);

        // TODO: Validar el rol de usuario
        $validator->after(function ($validator){
            /*if (Auth::user()->role_id > 1 ) {
                $validator->errors()->add('role', 'No tiene permisos para hacer esta acción');
            }*/
        });

        if (!$validator->fails()){
            $category = Category::onlyTrashed()->find($request->get('category_id'))->restore();
        }

        return response()->json($validator->messages(),200);
    }
}
