<?php

namespace App\Orchid\Layouts;

use App\Models\Booking;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class BookingListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'bookings';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): array
    {
        return [
            TD::make('name', 'Name')
                ->render(function (Booking $booking) {
                    return Link::make($booking->name)
                        ->route('platform.booking.edit', $booking);
                }),
            
            TD::make('email', 'E-mail')
                ->render(function (Booking $booking) {
                    return Link::make($booking->email)
                        ->route('platform.booking.edit', $booking);
                }), 
            
            TD::make('phone', 'Phone')
                ->render(function (Booking $booking) {
                    return Link::make($booking->phone)
                        ->route('platform.booking.edit', $booking);
                }),
            
            TD::make('state_from', 'State From')
                ->sort()
                ->render(function (Booking $booking) {
                    return Link::make($booking->state_from)
                        ->route('platform.booking.edit', $booking);
                }),
                
            TD::make('state_to', 'State To')
                ->sort()
                ->render(function (Booking $booking) {
                    return Link::make($booking->state_to)
                        ->route('platform.booking.edit', $booking);
                }),
            
            TD::make('vehicle', 'Vehicle')
                ->sort()
                ->render(function (Booking $booking) {
                    return Link::make($booking->vehicle)
                        ->route('platform.booking.edit', $booking);
                }),

            TD::make('date', 'Date of Movement')
                ->sort()
                ->render(function (Booking $booking) {
                    return Link::make($booking->date)
                        ->route('platform.booking.edit', $booking);
                }),
            
            TD::make('time', 'Time of Movement')
                ->render(function (Booking $booking) {
                    return Link::make($booking->time)
                        ->route('platform.booking.edit', $booking);
                }),

            TD::make('description', 'Description')
                ->render(function (Booking $booking) {
                    return Link::make($booking->description)
                        ->route('platform.booking.edit', $booking);
                }),

                TD::make('weight', 'Weight')
                ->render(function (Booking $booking) {
                    return Link::make($booking->weight)
                        ->route('platform.booking.edit', $booking);
                }),

            TD::make('created_at', 'Created'),
            TD::make('updated_at', 'Last edit'),
        ];
    }
}
