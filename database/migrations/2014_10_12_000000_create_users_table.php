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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('account_number');
            $table->float('account_balance')->default(100.00);
            $table->string('d_of_birth')->nullable();
            $table->string('gender')->nullable();
            $table->text('home_address')->nullable();
            $table->string('ssn')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('admin')->default(false);
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->string('passport_image_1', 2048)->nullable();
            $table->string('passport_image_2', 2048)->nullable();
            // total_deposits
            // total_transfers
            // total_withdrawals
            // total_loans

            $table->string('total_deposits')->nullable()->default(4000);
            $table->string('total_transfers')->nullable()->default(4000);
            $table->string('total_withdrawals')->nullable()->default(4000);
            $table->string('total_loans')->nullable()->default(4000);
            $table->boolean('passport_verified')->default(false);
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
        Schema::dropIfExists('users');
    }
};
