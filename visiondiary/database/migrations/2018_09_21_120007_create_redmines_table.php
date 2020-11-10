<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRedminesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('redmines', function (Blueprint $table) {
            $table->increments('id');
            $table->string('link')->nullable();
            $table->string('title');
            $table->string('redmine_no');
            $table->string('project_type');
            $table->string('status');
            $table->string('timespent')->nullable();
            $table->string('assigned_by')->nullable();
            $table->string('assigned_to')->nullable();
            $table->string('priority')->nullable();
            $table->string('start_date')->nullable();
            $table->string('due_date')->nullable();
            $table->string('description')->nullable();
            $table->integer('id_users');
            $table->integer('active');
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
        Schema::dropIfExists('redmines');
    }
}
