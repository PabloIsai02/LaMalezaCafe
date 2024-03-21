<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Orders;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function list() {
        $Orders =  Orders::all();
        $list = [];
        foreach($Orders as $Order) {
            $object = [
                "ID" => $Order->id,
                "ID Cliente" => $Order->customer_id,
                "ID del Usuario" => $Order->user_id,
                "Monto total" => $Order->total_amount,
                "Estado" => $Order->status,
                "Puntos ganados" => $Order->earned_points,
                "Recompensas" => $Order->reward_redeemed,
                "Creado" => $Order->created,
                "Updated" => $Order->updated_at

            ];
            array_push($list, $object);
        }
        return response()->json($list);
    }

    public function item($id) {
        $Orders =  Orders::where('id', '=', $id)->first();
        $object = [
            "ID" => $Orders->id,
                "ID Cliente" => $Orders->customer_id,
                "ID del Usuario" => $Orders->user_id,
                "Monto total" => $Orders->total_amount,
                "Estado" => $Orders->status,
                "Puntos ganados" => $Orders->earned_points,
                "Recompensas" => $Orders->reward_redeemed,
                "Creado" => $Orders->created,
                "Updated" => $Orders->updated_at
        ];
        return response()->json($object);
    }

    public function create(Request $request) {
        $data = $request->validate([
            'customer_id' => 'required|integer',
            'user_id' => 'required|integer',
            'total_amount' => 'required|numeric',
            'status' => 'required|boolean',
            'earned_points' => 'required|int',
            'reward_redeemed' => 'required|boolean',
                            
 
        ]);
        $Order = Orders::create([
            'customer_id'=>$data['customer_id'],
            'user_id'=>$data['user_id'],
            'total_amount'=>$data['total_amount'],
            'status'=>$data['status'],
            'earned_points'=>$data['earned_points'],
            'reward_redeemed'=>$data['reward_redeemed']
                 
        ]);
        if ($Order) {
            $object = [
                "response" => 'Success. Item saved correctly.',
                "data" => $Order,
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
