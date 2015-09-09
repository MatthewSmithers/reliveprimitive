<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    /**
     * Display the student dashboard.
     *
     * @return Response
     */
    public function index()
    {
        return "student dashboard";
    }

 
}
