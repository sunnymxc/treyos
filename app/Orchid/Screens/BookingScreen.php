<?php

namespace App\Orchid\Screens;

use App\Models\Booking;
use Orchid\Screen\Screen;

class BookingScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'BookingScreen';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [];
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): array
    {
        return [];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): array
    {
        return [];
    }
}
