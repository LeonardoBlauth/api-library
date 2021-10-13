<?php

namespace Database\Factories;

use App\Models\Address;
use App\Models\Owner;
use Illuminate\Database\Eloquent\Factories\Factory;

class OwnerFactory extends Factory
{
    /**
     * @var string
     */
    protected $model = Owner::class;

    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'phone' => $this->faker->phoneNumber(),
            'birth_date' => $this->faker->date('Y-m-d', '2000-01-01'),
            'address_id' => $this->faker->randomElement(Address::all('id')),
        ];
    }
}
