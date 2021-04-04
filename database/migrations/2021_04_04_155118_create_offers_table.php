<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 80);
            $table->string('color', 50)->default('Цвет позиции не указан');
            $table->string('article', 60)->default('Артикл позиции не указан')->nullable();
            $table->string('model', 80)->default('Модель позиции не указана')->nullable();
            $table->boolean('active');
            $table->string('picture')->default('Изобрадение позиции не указано');
            $table->timestamps();
        });

        Schema::table('offers', function(Blueprint $table){
            $table->index('name', 'index_name_offer');
            $table->index('article', 'index_article_offer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('offers', function(Blueprint $table) {
            $table->index('name', 'index_name_offer');
            $table->index('article', 'index_article_offer');
        });

        Schema::dropIfExists('offers');
        return true;
    }
}
