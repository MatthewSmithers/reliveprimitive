<?php

namespace App;

use App\Student;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public function students()
    {
    	return $this->belongsToMany(Student::class)->withTimeStamps();
    }
}
