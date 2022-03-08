<?php

namespace App\Http\Controllers;

use App\Http\Requests\CourseRequest;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['courses'] = Course::all();
        if(Session::has('message')) {
            $this->data['message'] = Session::get('message');
        }

        return view('admin.courses.courses', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['course']       = new Course();
        $this->data['categories'] = Category::all();

        return view('admin.courses.course_form', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CourseRequest $request)
    {
        $data = $request->all();
        $data['user_id'] = 1;

        if($request->file('photo')) {
            $data['photo'] = Storage::putFile('courses', $request->file('photo'));
        }

        $course = Course::create($data);

        Session::flash('message', 'Course Added Successfully');

        return redirect()->to('courses/' . $course->id );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->data['course'] = Course::find($id);
        if( $this->data['course']->photo ) {
            $this->data['course']->photo = Storage::url($this->data['course']->photo);
        }

        return view('admin.courses.show', $this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        $this->data['categories']   = Category::all();
        $this->data['course']       = $course;

        if( $this->data['course']->photo ) {
            $this->data['course']->photo = Storage::url($this->data['course']->photo);
        }

        return view('admin.courses.course_form', $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $data                   = $request->all();
        $course->title          = $data['title'];
        $course->description    = $data['description'];
        $course->category_id    = $data['category_id'];

        if($request->file('photo')) {
            if($course->photo) {
                Storage::delete($course->photo);
            }
            $course->photo = Storage::putFile('courses', $request->file('photo'));
        }

        $course->save();

        Session::flash('message', 'Course Updated Successfully');

        return redirect()->to('courses/' . $course->id );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy( Course $course)
    {
        if($course->photo) {
            Storage::delete($course->photo);
        }
        $course->delete();

        Session::flash('message', 'Course Deleted Successfully');

        return redirect()->to('courses');
    }
}
