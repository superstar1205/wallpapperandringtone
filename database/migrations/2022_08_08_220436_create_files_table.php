<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateFilesTable extends Migration
{
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->boolean('type');
            $table->string('name')->nullable();
            $table->string('file_path')->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('files');
    }
}