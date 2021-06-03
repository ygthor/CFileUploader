<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFileHandlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('file_handles', function (Blueprint $table) {
            $table->bigIncrements('fid');
            $table->string('filename')->nullable();
            $table->string('filepath')->nullable();
            $table->string('file_ext')->nullable();
            $table->string('filemine')->nullable();
            $table->integer('filesize')->nullable();
            $table->string('disk')->nullable();
            $table->string('status')->nullable();
            $table->string('model_name')->nullable();
            $table->string('model_primary_key')->nullable();
            $table->string('model_column')->nullable();
            $table->string('uploader_name')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
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
        Schema::dropIfExists('file_handles');
    }
}
