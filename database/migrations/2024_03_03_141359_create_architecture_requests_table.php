<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArchitectureRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('architecture_requests', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('adjective', 255);
            $table->string('email', 255);
            $table->string('phone', 255);
            $table->string('location', 255);
            $table->string('category', 255);
            $table->integer('space', 255);
            $table->string('dimensions', 255);
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
        Schema::dropIfExists('architecture_requests');
    }
}
