<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal_Project extends Model
{
    use HasFactory;
    public $timestamps=True;
    protected $fillable=[
        'id',
        'contract_number',
        'name',
        'square',
        'architector_id',
        'birth_day',
        'steps',
        'changes',
        'documentation_url',
        'more_prices',
        'project_id',
        'status',
        'start',
        'end',
        'control',
        'price'
    ];
    protected $table='personal_projects';
}
