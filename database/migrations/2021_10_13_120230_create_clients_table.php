<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    public function up(): void
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();

            $table->string('first_name')
                ->nullable(false);

            $table->string('last_name')
                ->nullable(false);

            $table->string('phone')
                ->nullable(false);

            $table->date('birth_date')
                ->nullable(false);

            $table->integer('rented_qty')
                ->default(0);

            $table->foreignId('address_id')
                ->constrained('addresses', 'id')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
}
