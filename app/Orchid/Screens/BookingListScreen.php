<?php

namespace App\Orchid\Screens;

use App\Orchid\Layouts\BookingListLayout;
use App\Models\Booking;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class BookingListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Booking Screen';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'All Bookings';


    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'bookings' => Booking::filters()->defaultSort('id')->paginate(10)
        ];
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): array
    {
        return [
           Link::make('Create new')
                ->icon('pencil')
                ->route('platform.booking.edit') 
        ];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): array
    {
        return [
            BookingListLayout::class
        ];
    }
}
