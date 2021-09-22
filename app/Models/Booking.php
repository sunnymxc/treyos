<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Booking extends Model
{
    use HasFactory, filterable, AsSource;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'type',
        'name',
        'email',
        'phone',
        'address_from',
        'address_to',
        'state_from',
        'state_to',
        'vehicle',
        'date',
        'time',
        'description',
        'weight'
    ];

    /**
     * Name of columns to which http sorting can be applied
     *
     * @var array
     */
    protected $allowedSorts = [
        'state_from',
        'state_to',
        'vehicle',
        'date'
    ];

    /**
     * Name of columns to which http filter can be applied
     *
     * @var array
     */
    
     protected $allowedFilters = [
        'vehicle',
    ];
}
