<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    public $timestamps=True;
    protected $fillable=[
        'architect_id',
        'name',
        'price',
        'photos_url',
        'designer_id',
        'architect_comment',
        'designer_comment',
        'advantages',
        'materials',
        'serial_id',
        'parent_id',
        'identity'
    ];
    protected $table='projects';
}
