<?php

namespace Database\Migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'products';

    /**
     * Run the migrations.
     * @table products
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('title_ar', 225)->nullable();
            $table->string('title_en', 225)->nullable();
            $table->text('sub_title_ar')->nullable();
            $table->text('sub_title_en')->nullable();
            $table->text('desc_ar')->nullable();
            $table->text('desc_en')->nullable();
            $table->text('images')->nullable();
            $table->text('details')->nullable();
            $table->bigInteger('sub_categories_id');

            $table->index(["sub_categories_id"], 'fk_products_sub_categories1_idx');
            $table->nullableTimestamps();


            $table->foreign('sub_categories_id', 'fk_products_sub_categories1_idx')
                ->references('id')->on('sub_categories')
                ->onDelete('no action')
                ->onUpdate('no action');
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
