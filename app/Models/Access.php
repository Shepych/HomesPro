<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Access extends Model
{
    use HasFactory;
    public $timestamps='True';
    protected $fillable=[
        'id',
        'user_id',
        'access_type',
        'personal_project_id'
    ];
    protected $table="accesses";
}
