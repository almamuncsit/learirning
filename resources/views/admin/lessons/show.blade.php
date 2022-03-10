@extends('admin.layout.layout')


@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"> Course Details </h1>
</div>

@if(session('message'))
<div class="alert alert-success" role="alert">
    {{ session('message') }}
</div>
@endif

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"> Lesson Details </h6>
    </div>
    <div class="card-body">

        <table class="table">
            <tr>
                <th width="150" class="text-right"> Lesson Title : </th>
                <td>{{ $lesson->title }}</td>
            </tr>
            <tr>
                <th class="text-right"> Course : </th>
                <td> {{ $lesson->course->title }} </td>
            </tr>
            <tr>
                <th class="text-right"> Video URL : </th>
                <td> {{ $lesson->video_url }} </td>
            </tr>
            <tr>
                <th class="text-right">Description : </th>
                <td> {{ $lesson->description }} </td>
            </tr>
            <tr>
                <th class="text-right"> Action </th>
                <td>
                    <form method="POST" action="{{ url('lessons/' . $lesson->id) }}">
                        @csrf
                        @method('delete')
                        <a class="btn btn-primary btn-sm" href=" {{ url('lessons/' . $lesson->id) . '/edit' }} "> Edit </a>
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"> Delete </button>
                    </form>
                </td>
            </tr>
        </table>
    </div>
</div>

@endsection
