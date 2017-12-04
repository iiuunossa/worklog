<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Worklog extends Model
{
    protected $table = 'worklogs';
    
        protected $fillable = [
            'topic_id',
            'cat_id',
            'task_id',
            'title_id',
            'med_ticket',
            'ticket_status',
            'ticket',
            'detail',
            'date',
            'starttime',
            'stoptime',
            'requester',
            'status',
            'jobid'
        ];
}
