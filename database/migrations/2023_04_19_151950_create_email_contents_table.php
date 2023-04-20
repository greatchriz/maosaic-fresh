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
        Schema::create('email_contents', function (Blueprint $table) {
            $table->id();
            // email_class
            $table->string('email_class');
            $table->string('title');
            $table->text('paragraph1');
            $table->text('paragraph2');
            $table->text('paragraph3');
            $table->text('paragraph4');
            $table->text('paragraph5');
            $table->text('paragraph6');
            $table->text('paragraph7');
            $table->text('paragraph8');
            $table->text('paragraph9');
            $table->text('paragraph10');
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
        Schema::dropIfExists('email_contents');
    }
};
