<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
	protected $guarded = [];
    //if you want to define the table name use this
    //protected $table = 'my_table';

    public function getRouteKeyName(){
    	return 'url';
    }
}
