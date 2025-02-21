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
        Schema::create('tasks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('task_name');
            $table->string('task_location')->nullable();
            // Integer for Time Complexity
            $table->tinyInteger('time_complexity');
            // Could store multiple if made a text field
            $table->string('materials_required')->nullable();
            //
            $table->dateTime('deadline')->nullable();
            // 1=low, 2=medium, 3=high
            $table->tinyInteger('priority')->nullable();
            // chores, work, health, etc
            $table->string('category')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
