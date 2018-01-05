<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    // If the name of the primary key column is changed
    // then this variable has to be created to override Eloquent assuming its named id
    protected $primaryKey = 'event_id';

    protected $fillable = ['event_name','event_description','event_time','event_location_id','created_by_id'];

    protected $guarded = ['created_at', 'updated_at'];
}
