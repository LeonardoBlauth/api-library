<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();

            $table->string('first_name')
                ->nullable(false);

            $table->string('last_name')
                ->nullable(false);

            $table->string('code')
                ->nullable(false);

            $table->string('phone')
                ->nullable(false);

            $table->date('birth_date')
                ->nullable(false);

            $table->date('entry_date')
                ->nullable(false);

            $table->float('salary')
                ->nullable(false);

            $table->foreignId('role_id')
                ->constrained('roles', 'id')
                ->onDelete('cascade');

            $table->foreignId('address_id')
                ->constrained('addresses', 'id')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
}
