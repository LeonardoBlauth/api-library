<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGendersTable extends Migration
{
    public function up(): void
    {
        Schema::create('genders', function (Blueprint $table) {
            $table->id();

            $table->set('gender', [
                'Epic', 'Fable', 'Soap Opera', 'Tale', 'Chronicle',
                'Rehearsal', 'Novel', 'Sonnet', 'Comedy', 'Tragedy',
                'Farce'
            ])
                ->nullable(false)
                ->unique();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('genders');
    }
}
