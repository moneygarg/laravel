<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfficetrackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('officetrack', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->date('start_date');
            $table->date('end_date');
            $table->date('extralogin');
            $table->date('extralogout');
            $table->date('lunchbreak');
            $table->string('leavetype');
            $table->text('description')->nullable();
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
        Schema::dropIfExists('officetrack');
    }
}
