<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('id');
            //varchar，長度為200
            $table->string('title', 200);
            //正整數，預設為0，可為空值
            $table->integer('price')->default(0)->nullable()->unsigned();
            $table->string('size', 50)->nullable();
            $table->boolean('enabled')->default(true);
            $table->string('pic', 255)->nullable();
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
        Schema::dropIfExists('items');
    }
}
