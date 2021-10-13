<?php

namespace Database\Factories;

use App\Models\Address;
use App\Models\Employee;
use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * @var string
     */
    protected $model = Employee::class;

    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'code' => $this->faker->randomLetter() . $this->faker->randomDigit() . $this->faker->randomLetter() . $this->faker->randomDigit(),
            'phone' => $this->faker->phoneNumber(),
            'birth_date' => $this->faker->date('Y-m-d', '2000-01-01'),
            'entry_date' => $this->faker->date('Y-m-d', 'now'),
            'salary' => $this->faker->numberBetween(1000, 10000) . '.00',
            'address_id' => $this->faker->randomElement(Address::all('id')),
            'role_id' => $this->faker->randomElement(Role::all('id')),
        ];
    }
}
