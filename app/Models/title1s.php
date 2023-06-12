<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class title1s extends Model
{
    use HasFactory;
    protected $table = 'title1s';
    
    protected $fillable = [
        'title1Name',
    ];
}
