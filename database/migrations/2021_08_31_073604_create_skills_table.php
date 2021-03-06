<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->string('skill1');
            $table->integer('pctskill1');
            $table->string('skill2');
            $table->integer('pctskill2');
            $table->string('skill3');
            $table->integer('pctskill3');
            $table->string('skill4');
            $table->integer('pctskill4');
            $table->string('skill5');
            $table->integer('pctskill5');
            $table->string('skill6');
            $table->integer('pctskill6');
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
        Schema::dropIfExists('skills');
    }
}
