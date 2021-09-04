<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
     protected $fillable = [
        'name',
        'email',
        'phone',
        'state_from',
        'address_from',
        'state_to',
        'address_to',
        'vehicle'
    ];
}
