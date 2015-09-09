<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Syllabus extends Model
{
  
  protected $guarded = ['grading', 'policies', 'prerequisites'];

}
