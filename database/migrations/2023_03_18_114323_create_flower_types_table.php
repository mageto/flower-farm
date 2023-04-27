<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlowerTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flower_types', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('flower_type_id')->nullable();
            $table->foreign('flower_type_id')->references('id')->on('flower_types')->onDelete('set null');
            $table->string('name');
            $table->text('description');
            $table->string('image_name')->nullable();
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
        Schema::dropIfExists('flower_types');
    }
}
