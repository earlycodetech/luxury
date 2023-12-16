<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    use HasFactory;

    protected $table = "rooms";
    protected $fillable = [
        'room_name',
        'room_details',
        'available_rooms',
        'room_price'
    ];

    // protected $hidden = [
    //     'id',
    //     'room_price'
    // ];
    
    // protected $casts = [
    //     'status' => "boolean"
    // ];
}
