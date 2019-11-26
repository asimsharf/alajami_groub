<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAjamiResumesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ajami_resumes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('short_intro');
            $table->longText('full_intro');
            $table->text('educational_life');
            $table->text('life_mission');
            $table->text('life_vision');
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
        Schema::dropIfExists('ajami_resumes');
    }
}
