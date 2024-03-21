<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function list() {
        $Products = Products::all();
        $list = [];
        foreach($Products as $Product) {
            $object = [
                "ID" => $Product->id,
                "Nombre" => $Product->name,
                "Descripcion" => $Product->description,
                "Precio" => $Product->price,
                "ID de Categoria" => $Product->category_id,
                "Imagen" => $Product->image,
                "Creado" => $Product->created_at,
                "Updated" => $Product->updated_at
            ];
            array_push($list, $object);
        }
        return response()->json($list);
    }

    public function item($id) {
        $Products = Products::where('id', '=', $id)->first();
        $object = [
            "ID" => $Products->id,
            "Nombre" => $Products->name,
            "Descripcion" => $Products->description,
            "Precio" => $Products->price,
            "ID de Categoria" => $Products->category_id,
            "Imagen" => $Products->image,
            "Creado" => $Products->created_at,
            "Updated" => $Products->updated_at
        ];
        return response()->json($object);
    }

    public function create(Request $request) {
        $data = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'category_id' => 'required|int',
            'image' => 'required|string'
                            
 
        ]);
        $Product = Products::create([
            'name'=>$data['name'],
            'description'=>$data['description'],
            'price'=>$data['price'],
            'category_id'=>$data['category_id'],
            'image'=>$data['image']
                 
        ]);
        if ($Product) {
            $object = [
                "response" => 'Success. Item saved correctly.',
                "data" => $Product,
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
