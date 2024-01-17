<?php

namespace Database\Migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutUsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'about_us';

    /**
     * Run the migrations.
     * @table about_us
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->text('image')->nullable();
            $table->string('top_title_ar', 225)->nullable();
            $table->string('top_title_en', 225)->nullable();
            $table->text('top_desc_ar')->nullable();
            $table->text('top_desc_en')->nullable();
            $table->bigInteger('happy_clients')->nullable();
            $table->string('title_ar', 225)->nullable();
            $table->string('title_en', 225)->nullable();
            $table->text('desc_ar')->nullable();
            $table->text('desc_en')->nullable();
            $table->nullableTimestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tableName);
    }
}
