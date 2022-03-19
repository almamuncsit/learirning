@extends('admin.layout.layout')

@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"> Lessons </h1>
    <a href=" {{ url('admin/lessons/create') }} " class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-plus fa-sm text-white-50"></i> Add Lesson
    </a>
</div>

@isset($message)
<div class="alert alert-success" role="alert">
    {{ $message }}
</div>
@endisset


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">  Lesson List </h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Course</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Course</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($lessons as $lesson)
                        <tr>
                            <td> {{ $lesson->id }} </td>
                            <td> {{ $lesson->title }} </td>
                            <td> {{ $lesson->course->title }} </td>
                            <td> {{ $lesson->created_at }} </td>
                            <td>
                                <a class="btn btn-info btn-sm" href=" {{ url('admin/lessons/' . $lesson->id) }} "> View </a>
                                <a class="btn btn-primary btn-sm" href=" {{ url('admin/lessons/' . $lesson->id) . '/edit' }} "> Edit </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
