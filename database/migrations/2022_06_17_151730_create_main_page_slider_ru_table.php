<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     *
     *
     *
     */
    public function up()
    {
        Schema::create('main_page_slider_ru', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('page_id')
                ->references('id')
                ->on('main_page');
            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->string('architect')->nullable();
            $table->string('object_name')->nullable();
            $table->string('banner')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('main_page_slider_ru');
    }
};
