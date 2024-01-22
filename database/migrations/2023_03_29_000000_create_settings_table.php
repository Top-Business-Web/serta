<?php

namespace Database\Migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'settings';

    /**
     * Run the migrations.
     * @table settings
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
            $table->text('desc_ar')->nullable();
            $table->text('desc_en')->nullable();
            $table->string('logo', 225)->nullable();
            $table->text('location_url')->nullable();
            $table->text('address_ar')->nullable();
            $table->text('address_en')->nullable();
            $table->text('open')->nullable();
            $table->string('email')->nullable();
            $table->text('facebook')->nullable();
            $table->text('youtube')->nullable();
            $table->text('twitter')->nullable();
            $table->text('instagram')->nullable();
            $table->text('linkedin')->nullable();
            $table->text('logo_vision')->nullable();
            $table->text('title_vision_ar')->nullable();
            $table->text('title_vision_en')->nullable();
            $table->text('desc_vision_ar')->nullable();
            $table->text('desc_vision_en')->nullable();
            $table->text('logo_mission')->nullable();
            $table->text('title_mission_ar')->nullable();
            $table->text('title_mission_en')->nullable();
            $table->text('desc_mission_ar')->nullable();
            $table->text('desc_mission_en')->nullable();
            $table->text('logo_values')->nullable();
            $table->text('title_values_ar')->nullable();
            $table->text('title_values_en')->nullable();
            $table->text('desc_values_ar')->nullable();
            $table->text('desc_values_en')->nullable();
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
