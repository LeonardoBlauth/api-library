<?php

namespace Database\Factories;

use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;

class AuthorFactory extends Factory
{
    /**
     * @var string
     */
    protected $model = Author::class;

    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'nationality' => $this->faker->country(),
            'birth_date' => $this->faker->date('Y-m-d', '2000-01-01'),
        ];
    }
}
