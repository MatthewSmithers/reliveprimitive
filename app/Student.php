<?php

namespace App;

use App\Group;
use App\Course;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{	
	/**
     *  A student can belong to many groups
     */
    public function group()
    {
    	return $this->belongsToMany(Group::class)->withTimeStamps();
    }



    /**
     *  A Student can have many courses
     */
    public function course()
    {
    	return $this->hasMany(Course::class);
    }
}
