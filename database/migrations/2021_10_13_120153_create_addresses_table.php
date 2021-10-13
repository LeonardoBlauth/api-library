<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    public function up(): void
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();

            $table->string('zip_code')
                ->nullable(false);

            $table->string('country')
                ->nullable(false);

            $table->string('city')
                ->nullable(false);

            $table->string('street')
                ->nullable(false);

            $table->string('number')
                ->nullable(false);

            $table->string('complement')
                ->default('');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
}
