<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobcodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobcodes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('topic_id',2);
            $table->string('topic_name',255);
            $table->string('cat_id',3);
            $table->string('cat_name',255);
            $table->string('task_id',3);
            $table->string('task_name',255);
            $table->string('title_id',3);
            $table->string('title_name',255);
            $table->string('type_id',2);
            $table->string('type_name',255);
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
        Schema::dropIfExists('jobcodes');
    }
}
