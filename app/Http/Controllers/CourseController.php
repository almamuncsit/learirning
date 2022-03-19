<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $this->data['courses'] = Course::all();

        return view('frontend.courses.courses', $this->data);
    }


    public function show(Course $course)
    {
        $this->data['course'] = $course;

        return view('frontend.courses.details', $this->data);
    }

}
