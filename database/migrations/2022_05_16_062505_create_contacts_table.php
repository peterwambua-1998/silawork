<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('shop_id');
            $table->string('phone_1');
            $table->string('phone_2')->nullable();
            $table->string('phone_3')->nullable();
            $table->string('email_1');
            $table->string('email_2')->nullable();
            $table->string('email_3')->nullable();
            $table->string('location');
            $table->string('ig_profile')->nullable();
            $table->string('twitter_profile')->nullable();
            $table->string('linkedin_profile')->nullable();
            $table->string('facebook_profile')->nullable();
            $table->timestamps();

            $table->foreign('shop_id')->references('id')->on('shops');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
