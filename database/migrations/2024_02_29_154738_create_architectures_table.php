<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArchitecturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('architectures', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->foreignId('categoryArch_id')
                ->constrained('category_arches')
                ->cascadeOnDelete();
            $table->string('title_ar', 225)->nullable();
            $table->string('title_en', 225)->nullable();
            $table->text('sub_title_ar')->nullable();
            $table->text('sub_title_en')->nullable();
            $table->string('customer_ar', 255);
            $table->string('customer_en', 255);
            $table->string('location_ar');
            $table->string('location_en');
            $table->string('year', 255);
            $table->enum('sector', ['public', 'private'])->default('public');
            $table->tinyInteger('status');
            $table->text('desc_ar')->nullable();
            $table->text('desc_en')->nullable();
            $table->text('images')->nullable();
            $table->text('details')->nullable();
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
        Schema::dropIfExists('architectures');
    }
}
