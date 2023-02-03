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
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('role')->default(0);
            $table->string('password');

            $table->integer('nic')->nullable();
            $table->string('address')->nullable();
            $table->string('gender')->nullable();
            $table->string('mobile')->nullable();
            $table->date('DOB')->nullable();
            $table->float('income',20,2)->nullable();
            $table->float('expenses',20,2)->nullable();
            $table->float('assets',25,2)->nullable();
            $table->float('liabilities',20,2)->nullable();
            $table->string('employment')->nullable();

            $table->string('bankName')->nullable();
            $table->integer('accountNumber')->nullable();
            $table->string('accountBalance',25,2)->nullable();

            $table->string('loanPurpose')->nullable();
            $table->rememberToken();
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
