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
        Schema::create('personal_projects', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('contract_number');
            $table->string('square')->nullable();
            $table->bigInteger('architector_login');
            $table->date('birth_day')->nullable();
            $table->json('steps')->nullable();
            $table->json('changes')->nullable();
            $table->json('documentation_url')->nullable();
            $table->json('more_prices')->nullable();
            $table->string('project_id')->nullable();
            $table->string('price')->nullable();
            $table->date('start')->nullable();
            $table->date('end')->nullable();
            $table->date('control')->nullable;
            $table->string('status')->nullable;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_projects');
    }
};
