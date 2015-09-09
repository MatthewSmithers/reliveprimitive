<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CoursesController extends Controller
{
    //Todo
    //Lots of repetition going on here. Title needs to be a 
    //property of the class and passed in with $data through a constructor method.

     /**
     * Display a listing of courses.
     *
     * @return Response
     */
    public function index()
    {
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }

   

    /**
     * Display a specified course.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {

        $title = "Wilderness 101";

        $id = "Advanced Spring Course 453";

        return view('courses.show', compact('id', 'title'));
    }



     /**
     * Register for the specified course.
     *
     * @param  int  $id
     * @return Response
     */
    public function register($course)
    {
        $course = "My Awesome Course!";
        $title = "some class";
        return view('courses/registration', compact('title', 'course'));
    }
}
