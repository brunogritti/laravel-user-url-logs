<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserUrlLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_url_logs', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->enum('action', ['created', 'updated', 'deleted'])->default('created');
            $table->string('model');
            $table->string('column')->nullable();
            $table->string('row');
            $table->string('data')->nullable();
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_url_logs');
    }
}
