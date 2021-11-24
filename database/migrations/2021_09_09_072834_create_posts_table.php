<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('discription');
            $table->string('body');
            $table->integer('commodity_id');
            $table->string('color');
            $table->integer('weight');
            $table->string('dimensions');
            $table->integer('status');
            $table->integer('status_commodity');
            $table->integer('product_type');
            $table->integer('hit');
            $table->tinyinteger('user_id');
            $table->string('image');
            $table->string('price');
            $table->string('price_2');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('posts');
    }
}
