<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChickenUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chickUser', function (Blueprint $table) {
            $table->id();
            $table->longText('name');
            $table->date('birthday');
            $table->integer('weight');
            $table->integer('steps')->default('0');
            $table->boolean('isRunning')->default('0');
            $table->timestamp('updated_at');
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chickenrun');
    }
}
