<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Employee;
use App\Models\Owner;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * @var string
     */
    protected $model = User::class;

    public function definition(): array
    {
        return [
            'type' => $this->faker->randomElement(['Client']),
            'client_id' => $this->faker->randomElement(Client::all('id')),
//            'employee_id' => $this->faker->randomElement(Employee::all('id')),
//            'owner_id' => $this->faker->randomElement(Owner::all('id')),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }

    public function unverified(): Factory
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
