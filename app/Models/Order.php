<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public $timestamps=True;
    protected $fillable=[
        'name',
        'email',
        'telephone_number',
        'comment',
        'status'
    ];
    protected $table='orders';
}
