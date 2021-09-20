<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class Booking extends Model
{
    use HasFactory;
    use AsSource;

    /**
     * @var array
     */

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address_from',
        'address_to',
        'state_from',
        'state_to',
        'vehicle',
        'room',
        'date',
        'time',
        'description',
        'weight'
    ];
}
