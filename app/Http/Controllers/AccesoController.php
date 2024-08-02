<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserMetadata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;




class AccesoController extends Controller
{
    public function login()
    {
         return view('acceso.login');
    }

    public function registro()
    {
        return view('acceso.registro');
    }

    public function RegistroPost(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|min:6',
                'apellidos' => 'required|min:6',
                'email' => 'required|email:rfc,dns|unique:users,email',
                'direccion' => 'required',
                'profesion' => 'required',
                'telefono' => 'required',
                'password' => 'required|min:6|confirmed'
            ],
            [
                'name.required' => 'El Campo Nombre está vacío',
                'name.min' => 'El Campo Nombre debe tener mínimo 6 Caracteres',
                'apellidos.required' => 'El Campo Apellidos está vacío',
                'apellidos.min' => 'El Campo Apellidos debe tener mínimo 10 Caracteres',
                'email.required' => 'El Campo E-mail está vacío',
                'email.email' => 'El E-mail ingresado no es válido',
                'email.unique' => 'El E-mail ingresado ya está registrado',
                'telefono.required' => 'El Campo Teléfono está vacío',
                'direccion.required' => 'El Campo Dirección está vacío',
                'profesion.required' => 'El Campo Profesión está vacío',
                'password.required' => 'El Campo Contraseña está vacío',
                'password.min' => 'El Campo Contraseña debe tener mínimo 6 Caracteres',
                'password.confirmed' => 'Las Contraseñas ingresadas no coinciden'
            ]
        );
 
        $user = User::create(
            [
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
                'created_at' => now(),
                'updated_at' => now()
            ]
        );

        UserMetadata::create(
            [
                'user_id' => $user->id,
                'perfil_id' => 2,
                'telefono' => $request->input('telefono'),
                'apellidos' => $request->input('apellidos'),
                'direccion' => $request->input('direccion'),
                'profesion' => $request->input('profesion'),
                'created_at' => now(),
                'updated_at' => now()
            ]
        );

        return redirect()->route('registro');
    }  
}    
