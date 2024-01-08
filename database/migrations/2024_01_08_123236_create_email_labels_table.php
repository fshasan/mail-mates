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
        Schema::create('email_labels', function (Blueprint $table) {
            $table->id();
            $table->foreignId('email_id')->constrained('emails');
            $table->foreignId('label_id')->constrained('labels');
            $table->primary(['email_id', 'label_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('email_labels');
    }
};
