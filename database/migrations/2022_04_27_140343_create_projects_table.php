<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('price');
            $table->string('architector_id');
            $table->string('designer_id');
            $table->string('square');
            $table->json('photos');
            $table->string('arch_comment');
            $table->string('dsgn_comment');
            $table->json('advantages');
            $table->json('plans');
            $table->json('characteristics');
            $table->json('materials');
            $table->string('identity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
};
