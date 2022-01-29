<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTradingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tradings', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->double('ltp', 8, 2);
            $table->double('high', 8, 2);
            $table->double('low', 8, 2);
            $table->double('close_price', 8, 2);
            $table->double('ycp', 8, 2);
            $table->double('change', 8, 2);
            $table->integer('trade');
            $table->double('value_mn', 8, 2);
            $table->integer('volume');
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
        Schema::dropIfExists('tradings');
    }
}
