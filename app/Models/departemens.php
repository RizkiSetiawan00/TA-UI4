<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class departemens extends Model
{
    use HasFactory;
    protected $table = 'departemens';
    
    protected $fillable = [
        'departemenName'
    ];
}
