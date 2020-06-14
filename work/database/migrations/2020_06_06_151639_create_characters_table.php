<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->comment('キャラクター名');
            $table->integer('belong_id')->nullable()->comment('所属組織ID');
            $table->date('birth_date')->nullable()->comment('誕生日');
            $table->integer('gender')->comment('性別');
            $table->string('ability')->nullable()->comment('悪魔の実');
            $table->string('note')->nullable()->comment('備考');
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
        Schema::dropIfExists('characters');
    }
}
