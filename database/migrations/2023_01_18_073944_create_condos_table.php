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
        Schema::create('condos', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->string('title')->nullable();
            $table->string('condos_image')->nullable();
            $table->longText('description')->nullable();
            $table->string('address')->nullable();
            $table->string('location')->nullable();
            $table->string('developer')->nullable();
            $table->string('price')->nullable();
            $table->string('one_bed_starting_price')->nullable();
            $table->string('two_bed_starting_price')->nullable();
            $table->string('category')->nullable();
            $table->string('occupency')->nullable();
            $table->integer('area_size')->nullable();
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
        Schema::dropIfExists('condos');
    }
};
