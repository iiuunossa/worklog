<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorklogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('worklogs', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('topic_id')->unsigned()->index();
            $table->smallInteger('cat_id')->unsigned()->index();
            $table->smallInteger('task_id')->unsigned()->index();
            $table->smallInteger('title_id')->unsigned()->index();
            $table->string('type_name',10);
            $table->boolean('ticket_status');
            $table->string('ticket',6);
            $table->string('detail',255);
            $table->date('date');
            $table->time('starttime');
            $table->time('stoptime');
            $table->string('requester',50);
            $table->tinyInteger('status')->unsigned()->index();
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
        Schema::dropIfExists('worklogs');
    }
}
