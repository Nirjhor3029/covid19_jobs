<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeekersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seekers', function (Blueprint $table) {
            $table->id();


            $table->unsignedBigInteger('user_id')->default(0);
            $table->foreign('user_id')->nullable()->references('id')->on('users');
            $table->unsignedBigInteger('area_id')->default(0);
            $table->foreign('area_id')->nullable()->references('id')->on('areas');

            $table->string('name');
            $table->string('phone');
            $table->string('email')->nullable();
            $table->string('nid')->nullable();
            $table->double('per_day_income')->nullable();
            $table->integer('previous_experience')->nullable();
            $table->integer('willingness_to_travel')->nullable();
            $table->integer('group_id');

            $table->timestamps();

            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seekers');
    }
}
