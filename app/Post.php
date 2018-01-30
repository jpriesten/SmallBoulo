<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [

    	'userSkill',
    	'jobLocation',
		'toDo',
		'deadline',
		'experience',
		'start',
		'priceRange',
		'noOfWorkers'

    ];
}
