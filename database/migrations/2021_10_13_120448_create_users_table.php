<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            $table->set('type', ['Client', 'Employee', 'Owner'])
                ->default('client');

            $table->foreignId('client_id')
                ->nullable()
                ->constrained('clients', 'id')
                ->onDelete('cascade');

            $table->foreignId('employee_id')
                ->nullable()
                ->constrained('employees', 'id')
                ->onDelete('cascade');

            $table->foreignId('owner_id')
                ->nullable()
                ->constrained('owners', 'id')
                ->onDelete('cascade');

            $table->string('email')
                ->nullable(false)
                ->unique();

            $table->timestamp('email_verified_at')->nullable();

            $table->string('password')
                ->nullable(false);

            $table->rememberToken();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
}
