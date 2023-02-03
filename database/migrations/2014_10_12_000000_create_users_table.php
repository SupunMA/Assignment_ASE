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
            $table->string('first name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('role')->default(0);
            $table->string('password');

            $table->integer('nic');
            $table->string('address');
            $table->string('mobile');
            $table->date('DOB');
            $table->float('income',20,2);
            $table->float('expenses',20,2);
            $table->float('assets',25,2);
            $table->float('liabilities',20,2);
            $table->string('employment');

            $table->string('bankName');
            $table->integer('accountNumber');
            $table->string('accountBalance',25,2);

            $table->string('loanPurpose');
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
