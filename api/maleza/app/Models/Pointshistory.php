<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pointshistory extends Model
{
    use HasFactory;
    protected $fillable = ['customer_id','order_id','earned_points','redeemed_points'];

}
