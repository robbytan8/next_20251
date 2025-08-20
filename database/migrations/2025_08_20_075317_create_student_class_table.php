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
      Schema::create('student_class', function (Blueprint $table) {
        $table->string('student_id', 10);
        $table->integer('period_id');
        $table->string('class', 10);
        $table->timestamps();

        // Composite primary key
        $table->primary(['student_id', 'period_id', 'class']);

        // Foreign keys
        $table->foreign('student_id')->references('id')->on('student')
          ->onUpdate('cascade')->onDelete('restrict');
        $table->foreign('period_id')->references('id')->on('period')
          ->onupdate('cascade')->onDelete('restrict');
      });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_class');
    }
};
