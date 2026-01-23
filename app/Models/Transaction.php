<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
protected $fillable = [
    'customer_name',
    'id_game',
    'game',
    'item',
    'status'
];

}
