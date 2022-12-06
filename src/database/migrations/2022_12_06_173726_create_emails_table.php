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
        Schema::create('emails', function (Blueprint $table) {
            $table->id();
            $table->integer('sender_id')->unsigned();
            $table->json('reciever_id');
            $table->string('subject',100);
            $table->text('body');
            $table->tinyInteger('email_type')->index('etype')->comment('Primary: 1, Social: 2, Promotional: 3, Forum: 4');
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
        Schema::dropIfExists('emails');
    }
};
