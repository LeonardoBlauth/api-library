<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Author;
use App\Models\Book;
use App\Models\Client;
use App\Models\Color;
use App\Models\Employee;
use App\Models\Owner;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Address::factory(80)->create();
        Client::factory(100)->create();
        Employee::factory(14)->create();
        Owner::factory(2)->create();
        User::factory(100)->create();
        Color::factory(100)->create();
        Author::factory(30)->create();
        Book::factory(100)->create();
    }
}
