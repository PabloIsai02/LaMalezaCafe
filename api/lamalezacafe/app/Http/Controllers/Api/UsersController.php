<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function list() {
        $Users =  Users::all();
        $list = [];
        foreach($Users as $User) {
            $object = [
                "id" => $User->id,
                "Nombre" => $User->name,
                "Apellido" => $User->surname,
                "Correo" => $User->email,
                "Telefono" => $User->phone,
                "Email Verificado" => $User->email_verifed_at,
                "Contraseña" => $User->password,
                "Imagen" => $User->image,
                "Token" => $User->remember_token,
                "Created" => $User->created,
                "Updated" => $User->updated_at

            ];
            array_push($list, $object);
        }
        return response()->json($list);
    }

    public function item($id) {
        $Users =  Users::where('id', '=', $id)->first();
        $object = [
            "id" => $Users->id,
            "Nombre" => $Users->name,
            "Apellido" => $Users->surname,
            "Correo" => $Users->email,
            "Telefono" => $Users->phone,
            "Email Verificado" => $Users->email_verifed_at,
            "Contraseña" => $Users->password,
            "Imagen" => $Users->image,
            "Token" => $Users->remember_token,
            "Created" => $Users->created,
            "Updated" => $Users->updated_at
        ];
        return response()->json($object);
    }

    public function create(Request $request) {
        $data = $request->validate([
            'name' => 'required|string',
            'surname' => 'required|string',
            'email' => 'required|string',
            'phone' => 'required|numeric',
            'password' => 'required|string',
            'image' => 'required|string'


        ]);
        $user = users::create([
            'name'=>$data['name'],
            'surname'=>$data['surname'],
            'email'=>$data['email'],
            'phone'=>$data['phone'],
            'password'=>$data['password'],
            'image'=>$data['image']


        ]);
        if ($user) {
            $object = [
                "response" => 'Success. Item saved correctly.',
                "data" => $user,
            ];
            return response()->json($object);
        }else{
            $object = [
                "response" => 'Error: Something went wrong, please try again.'
            ];
            return response()->json($object);
        }
    }
}
