<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{   public $table = "todo";
    protected $fillable = array('name', 'text');
}
