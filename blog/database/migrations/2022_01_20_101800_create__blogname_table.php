<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlognameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogname', function (Blueprint $table) {
            $table->id('Blog_id');
            $table ->string('Name',100);
            $table ->string('username',20)->uniqid();
            $table ->string('Bio',200);
            $table ->string('City',30);
            $table ->string('State',30);
            $table ->string('Country',30);
            $table ->enum('Gender',['M','F','O']);
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
        Schema::dropIfExists('_blogname');
    }
}
