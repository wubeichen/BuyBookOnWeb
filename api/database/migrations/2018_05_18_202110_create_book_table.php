<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->comment('名字')->nullable();
            $table->string('author')->comment('作者')->nullable();
            $table->string('publisher')->comment('出版商')->nullable();
            $table->integer('stock')->comment('库存')->nullable();
            $table->integer('score')->comment('总得分')->nullable();
            $table->integer('number')->comment('评分人数')->nullable();
            $table->boolean('passed')->comment('审核')->nullable();
            $table->integer('category_id')->comment('分类')->nullable();
            $table->string('cover')->comment('封面')->nullable();
            $table->integer('user_id')->nullable();
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
        Schema::dropIfExists('book');
    }
}
