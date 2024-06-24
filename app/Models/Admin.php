<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Notifications\ResetPassword as ResetPasswordNotification;

class Admin extends Authenticatable
{
    use HasFactory,Notifiable;

    protected $table = 'admin';

    protected $fillable = ['name','email', 'username', 'password','profile','remember_token'];


    protected $hidden = [
        'password', 'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    public function scopeActive($query) {
        return $query->whereStatus(1);
    }

}
