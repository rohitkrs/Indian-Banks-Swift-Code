<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBankTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank', function (Blueprint $table) {
            $table->id();
            $table->string('bank_name', 255)->charset = 'utf8mb4';
            $table->string('ifsc_code', 55)->charset = 'utf8mb4';
            $table->string('branch', 155)->charset = 'utf8mb4';
            $table->text('address');
            $table->string('contact', 55)->charset = 'utf8mb4';
            $table->string('city', 155)->charset = 'utf8mb4';
            $table->string('district', 155)->charset = 'utf8mb4';
            $table->string('state', 155)->charset = 'utf8mb4';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bank');
    }
}
