<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropNewslettersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('newsletters');
        // Schema::create('newsletters', function (Blueprint $table) { 
        // $table->increments('id');
        //     $table->timestamps();
        //     $table->string('title')->nullable();
        //     $table->longText('description')->nullable();
        //     $table->longText('article')->nullable();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
}
