<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function list() {
        $Categories =  Category::all();
        $list = [];
        foreach($Categories as $Category) {
            $object = [
                "id" => $Category->id,
                "Nombre" => $Category->name,
                "Creado" => $Category->created_at,
                "Updated" => $Category->updated_at

            ];
            array_push($list, $object);
        }
        return response()->json($list);
    }

    public function item($id) {
        $Categories =  Category::where('id', '=', $id)->first();
        $object = [
            "id" => $Categories->id,
            "Nombre" => $Categories->name,
            "Creado" => $Categories->created_at,
            "Updated" => $Categories->updated_at

        ];
        return response()->json($object);
    }

    public function create(Request $request) {
        $data = $request->validate([
            'name' => 'required|string'

           
        ]);
        $Categories = Category::create([
            'name'=>$data['name']
        
        ]);
        if ($Categories) {
            $object = [
                "response" => 'Success. Item saved correctly.',
                "data" => $Categories,
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
