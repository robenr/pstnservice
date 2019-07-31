<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFileManagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('file_managers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('filename');
            $table->string('mimetype');
            $table->string('location');
            $table->char('status',2)->nullable();
            $table->integer('uploaded_by');
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
        Schema::dropIfExists('file_managers');
    }
}
