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
            $table->tinyInteger('topic_id')->unsigned()->index();
            $table->string('topic_name',255);
            $table->smallInteger('cat_id')->unsigned()->index();
            $table->string('cat_name',255);
            $table->smallInteger('task_id')->unsigned()->index();
            $table->string('task_name',255);
            $table->smallInteger('title_id')->unsigned()->index();
            $table->string('title_name',255);
            $table->tinyInteger('type_id')->unsigned()->index();
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
