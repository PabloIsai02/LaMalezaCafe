<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Suppliers;

class SuppliersController extends Controller
{
    public function list() {
        $Suppliers =  Suppliers::all();
        $list = [];
        foreach($Suppliers as $Supplier) {
            $object = [
                "id" => $Supplier->id,
                "Nombre" => $Supplier->name,
                "Correo" => $Supplier->email,
                "Telefono" => $Supplier->phone,
                "Created" => $Supplier->created,
                "Updated" => $Supplier->updated_at

            ];
            array_push($list, $object);
        }
        return response()->json($list);
    }

    public function item($id) {
        $Suppliers =  Suppliers::where('id', '=', $id)->first();
        $object = [
                "Nombre" => $Suppliers->name,
                "Correo" => $Suppliers->email,
                "Telefono" => $Suppliers->phone,
                "Created" => $Suppliers->updated_at,
                "Updated" => $Suppliers->updated_at
        ];
        return response()->json($object);
    }

    public function create(Request $request) {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'phone' => 'required|string'                            
 
        ]);
        $Supplier = Suppliers::create([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'phone'=>$data['phone'],
                        
        ]);
        if ($Supplier) {
            $object = [
                "response" => 'Success. Item saved correctly.',
                "data" => $Supplier,
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
