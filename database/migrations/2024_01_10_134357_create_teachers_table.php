<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('Email')->uniqid();
            $table->integer('Password')->max(10);
            $table->string('Phone');
            $table->string('Gender');
            $table->date('DOB');
            $table->string('CurrentAddress');
            $table->string('PermentAddress');
            $table->string('PhotoName');
            $table->string('PhotoPath');
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};