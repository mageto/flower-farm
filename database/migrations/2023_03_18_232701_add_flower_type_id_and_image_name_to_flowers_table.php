<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFlowerTypeIdAndImageNameToFlowersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('flowers', function (Blueprint $table) {
            $table->unsignedBigInteger('flower_type_id');
            $table->string('image_name')->nullable();
            $table->foreign('flower_type_id')->references('id')->on('flower_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('flowers', function (Blueprint $table) {
            $table->dropForeign(['flower_type_id']);
            $table->dropColumn(['flower_type_id', 'image_name']);
        });
    }
}
