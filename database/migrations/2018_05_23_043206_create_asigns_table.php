<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asigns', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category');
            $table->string('ItemName');
            $table->string('duration');
            $table->string('serialNumber');
            $table->string('employeeId');
            $table->string('issuedBy');
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
        Schema::dropIfExists('asigns');
    }
}
