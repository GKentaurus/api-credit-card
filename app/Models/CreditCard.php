<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreditCard extends Model
{
    use HasFactory, SoftDeletes;


    protected $fillable = [
        'user_id',
        'card_number',
        'card_name',
        'expiration_date',
        'cvc',
        'is_main'
    ];

    protected $cast = [
        'expiration_date' => 'datetime'
    ];
}
