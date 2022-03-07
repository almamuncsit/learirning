@extends('admin.layout.layout')

@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"> Courses </h1>
    <a href=" {{ url('courses/create') }} " class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-plus fa-sm text-white-50"></i> Add Course
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
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($courses as $course)
                        <tr>
                            <td> {{ $course->id }} </td>
                            <td> {{ $course->title }} </td>
                            <td> {{ $course->created_at }} </td>
                            <td>

                                <form method="POST" action="{{ url('courses/' . $course->id) }}">
                                    @csrf
                                    @method('delete')
                                    <a class="btn btn-info btn-sm" href=" {{ url('courses/' . $course->id) }} "> View </a>
                                    <a class="btn btn-primary btn-sm" href=" {{ url('courses/' . $course->id) . '/edit' }} "> Edit </a>
                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"> Delete </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
