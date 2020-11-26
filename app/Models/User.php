<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes;

    protected $fillable = [
        'firstname',
        'middlename',
        'lastname',
        'others_lastnames',
        'password',
        'access_token',
        'document_type',
        'document_number',
        'role'
    ];

    protected $hidden = [
        'password',
        'access_token',
        'remember_token',
    ];
}
