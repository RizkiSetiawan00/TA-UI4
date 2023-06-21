<?php

namespace App\Models;

use Kirschbaum\PowerJoins\PowerJoins;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class lokasinyas extends Model
{
    use HasFactory, PowerJoins;
    protected $table = 'lokasinyas';
    
    protected $fillable = [
        'lokasiName',
    ];
}
