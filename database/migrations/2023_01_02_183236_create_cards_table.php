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
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            //create migration column for user_id, card number nullable, expiry date nullable, cvc nullable, pin nullable, name, type, address, phone number, active default false
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('card_number')->nullable();
            $table->string('expiry_date')->nullable();
            $table->string('cvc')->nullable();
            $table->string('pin')->nullable();
            $table->string('name');
            $table->string('type');
            $table->string('address');
            $table->string('phone_number');
            $table->boolean('active')->default(false);
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
        Schema::dropIfExists('cards');
    }
};
