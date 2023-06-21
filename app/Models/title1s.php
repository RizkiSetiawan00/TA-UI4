<?php

namespace App\Models;

use Kirschbaum\PowerJoins\PowerJoins;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class title1s extends Model
{
    use HasFactory, PowerJoins;
    protected $table = 'title1s';
    
    protected $fillable = [
        'title1Name',
    ];
}
