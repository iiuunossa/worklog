<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobcode extends Model
{
    protected $table = 'jobcodes';
    
        protected $fillable = [
            'topic_id',
            'topic_name',
            'cat_id',
            'cat_name',
            'task_id',
            'task_name',
            'title_id',
            'title_name',
            'type_id',
            'type_name'
        ];
}
