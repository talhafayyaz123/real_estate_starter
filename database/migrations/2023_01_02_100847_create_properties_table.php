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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->string('property_id')->nullable();
            $table->longText('description')->nullable();
            $table->integer('price')->nullable();
            $table->string('property_image')->nullable();
            $table->string('property_video')->nullable();
            $table->string('market')->nullable();
            $table->string('city')->nullable();
            $table->string('land')->nullable();
            $table->string('type')->nullable();
            $table->integer('area_size')->nullable();
            $table->integer('bedroom')->nullable();
            $table->integer('bathroom')->nullable();
            $table->boolean('status')->default(false);
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
};
