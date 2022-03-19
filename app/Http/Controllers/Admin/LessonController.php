<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LessonRequest;
use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Support\Facades\Session;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['lessons'] = Lesson::all();
        if(Session::has('message')) {
            $this->data['message'] = Session::get('message');
        }

        return view('admin.lessons.lessons', $this->data);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['lesson']       = new Lesson();
        $this->data['courses']      = Course::all();

        return view('admin.lessons.lesson_form', $this->data);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LessonRequest $request)
    {
        $data = $request->all();

        $lesson = Lesson::create($data);

        Session::flash('message', 'Lesson Added Successfully');

        return redirect()->to('admin/lessons/' . $lesson->id );
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->data['lesson'] = Lesson::findOrFail($id);

        return view('admin.lessons.show', $this->data);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  Lesson  $Lesson
     * @return \Illuminate\Http\Response
     */
    public function edit(Lesson $lesson)
    {
        $this->data['courses']      = Course::all();
        $this->data['lesson']       = $lesson;

        return view('admin.lessons.lesson_form', $this->data);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\LessonRequest  $request
     * @param  Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function update(LessonRequest $request, Lesson $lesson)
    {
        $data                   = $request->all();
        $lesson->title          = $data['title'];
        $lesson->description    = $data['description'];
        $lesson->course_id      = $data['course_id'];
        $lesson->video_url      = $data['video_url'];
        $lesson->save();

        Session::flash('message', 'Lesson Updated Successfully');

        return redirect()->to('admin/lessons/' . $lesson->id );
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function destroy( Lesson $lesson)
    {
        $lesson->delete();

        Session::flash('message', 'Lesson Deleted Successfully');

        return redirect()->to('admin/lessons');
    }


}
