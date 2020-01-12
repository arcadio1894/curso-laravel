<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('role')->get();
        return view('users.index')->with(compact('users'));
    }

    public function store(Request $request)
    {
        // TODO: Primero se colocan las reglas
        $rules = array(
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'role' => 'required|exists:roles,id'
        );
        $mensajes = array(
            'name.required' => 'Es necesario ingresar el nombre del usuario',
            'name.string' => 'El nombre del usuario debe tener caracteres',
            'name.max' => 'El nombre debe contar con maximo 255 caracteres',
            'email.required' => 'Es necesario ingresar el email del usuario',
            'email.string' => 'El nombre del usuario debe tener caracteres',
            'email.email' => 'El email debe tener la estructura de un email',
            'email.max' => 'El email debe contar con maximo 255 caracteres',
            'email.unique' => 'Ya existe el email especificado',
            'password.required' => 'Es necesario ingresar la contraseña del usuario',
            'password.string' => 'La contraseña del usuario debe tener caracteres',
            'password.min' => 'La contraseña del usuario debe tener minimo 6 caracteres',
            'password.confirmed' => 'La contraseña del usuario debe tener un campo de confirmacion',
            'role.required' => 'Es necesario ingresar el rol del usuario',
            'role.exists' => 'El rol no existe en la table de roles',
        );
        $validator = Validator::make($request->all(), $rules, $mensajes);

        // TODO: Validar el rol de usuario
        $validator->after(function ($validator){
            if (Auth::user()->role_id > 1 ) {
                $validator->errors()->add('role', 'No tiene permisos para hacer esta acción');
            }
        });

        if (!$validator->fails()){
            $user = User::create([
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'password' => bcrypt($request->get('password')),
                'role_id' => $request->get('role'),
            ]);
            $user->save();
        }

        return response()->json($validator->messages(),200);
    }
}
