<?php

namespace App\Models;

 
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\banks;
use App\Models\brands;
use App\Models\title1s;
use App\Models\lokasinyas;
 
use App\Models\departemens;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
 
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
 
    public function setPasswordAttribute($password)
    {   
        $this->attributes['password'] = bcrypt($password);
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'idNumb',
        'joinDate',
        'nip',
        'password',
        'alamat',
        'jobDesc',
        'jobPurpose',
        'accName',
        'accNumb',
        'npwp',
        'health',
        'bpjsKerja',
        'bpjsSehat',
        'type'
    ];
 
    protected $hidden = [
        'password',
        'remember_token',
    ];
 
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
 
    /**
     * Interact with the user's first name.
     *
     * @param  string  $value
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function type(): Attribute
    {
        return new Attribute(
            get: fn ($value) =>  ["user", "admin", "manager", "HR"][$value], //0 = User, 1 = Admin, 2 = Manager, 3 = HR
        );
    }
}