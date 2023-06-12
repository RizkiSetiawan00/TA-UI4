<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aktivitas extends Model
{
    use HasFactory;
    protected $table = 'aktivitas'; 
    
    protected $fillable = [
        'desc',
        'dealine',
        'status',
        'sta_desc',
    ];
}
