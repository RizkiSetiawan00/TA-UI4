<?php

namespace App\Models;

use Kirschbaum\PowerJoins\PowerJoins;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class departemens extends Model
{
    use HasFactory, PowerJoins;
    protected $table = 'departemens';
    
    protected $fillable = [
        'departemenName'
    ];
}
