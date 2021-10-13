<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();

            $table->string('name')
                ->nullable(false);

            $table->string('edition')
                ->nullable(false);

            $table->string('publishing_company')
                ->nullable(false);

            $table->date('publication_date')
                ->nullable();

            $table->longText('description')
                ->nullable();

            $table->boolean('is_hard_covered')
                ->default(false);

            $table->float('price')
                ->nullable(false);

            $table->foreignId('author_id')
                ->constrained('authors', 'id')
                ->onDelete('cascade');

            $table->foreignId('gender_id')
                ->constrained('genders', 'id')
                ->onDelete('cascade');

            $table->foreignId('color_id')
                ->constrained('colors', 'id')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('books');
    }
}
