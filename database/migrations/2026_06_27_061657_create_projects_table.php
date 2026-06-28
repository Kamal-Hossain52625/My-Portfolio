<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {

            $table->id();

            $table->string('title');

            $table->string('category');

            $table->string('image')->nullable();

            $table->string('project_link')->nullable();

            $table->timestamps();
        });

        Schema::create('admins', function (Blueprint $table) {

            $table->id();

            $table->string('username')->unique();

            $table->string('password');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
