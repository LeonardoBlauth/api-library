<?php

namespace Database\Factories;

use App\Models\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    /**
     * @var string
     */
    protected $model = Address::class;

    public function definition(): array
    {
        return [
            'zip_code' => $this->faker->postcode(),
            'country' => $this->faker->country(),
            'city' => $this->faker->city(),
            'street' => $this->faker->streetName(),
            'number' => $this->faker->buildingNumber(),
        ];
    }
}
