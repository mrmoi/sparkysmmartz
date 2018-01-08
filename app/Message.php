<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //
    protected $primaryKey = 'm_id';

    protected $fillable = ['name','email','comment'];

    protected $guarded = ['created_at', 'updated_at'];
}
