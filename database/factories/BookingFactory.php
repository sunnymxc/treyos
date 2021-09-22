<?php

namespace Database\Factories;

use App\Models\Booking;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BookingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Booking::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'phone' => $this->faker->name,
            'address_from' => $this->faker->name,
            'address_to' => $this->faker->name,
            'state_from' => $this->faker->name,
            'state_to' => $this->faker->name,
            'vehicle' => $this->faker->name,
            'date' => $this->faker->date,
            'time' => $this->faker->name,
            'description' => $this->faker->name,
            'weight' => $this->faker->name
        ];
    }
}
