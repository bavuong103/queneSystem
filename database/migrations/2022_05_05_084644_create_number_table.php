<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNumberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('number', function (Blueprint $table) {
            $table->id();

            $table->string('fullname');
            $table->integer('service');
            $table->timestamp('dateUsed');
            $table->integer('status');
            $table->string('original')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('number');
    }
}
