<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class aktivitas extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'desc',
        'deadline',
        'status',
        'sta_desc',
        'user_id'
    ];
    
    protected $dates = [
        'deadline'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
