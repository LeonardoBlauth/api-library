<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Book;
use App\Models\Color;
use App\Models\Gender;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * @var string
     */
    protected $model = Book::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->domainName(),
            'edition' => $this->faker->randomDigitNotZero(),
            'publishing_company' => $this->faker->name(),
            'publication_date' => $this->faker->date('Y-m-d', 'now'),
            'description' => $this->faker->realTextBetween(100, 300),
            'is_hard_covered' => $this->faker->boolean(20),
            'price' => $this->faker->numberBetween(49, 199) . '.99',
            'author_id' => $this->faker->randomElement(Author::all('id')),
            'gender_id' => $this->faker->randomElement(Gender::all('id')),
            'color_id' => $this->faker->randomElement(Color::all('id')),
        ];
    }
}
