@extends('admin.layout.layout')


@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"> Course Details </h1>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"> Course Details </h6>
    </div>
    <div class="card-body">
        <table class="table">
            <tr>
                <th>Title</th>
                <td>{{ $course->title }}</td>
            </tr>
            <tr>
                <th> Category </th>
                <td> {{ $course->category_id }} </td>
            </tr>
            <tr>
                <th>Description</th>
                <td> {{ $course->description }} </td>
            </tr>
            <tr>
                <th>Photo</th>
                <td>
                    @if ($course->photo)
                        <img width="150" src="{{ $course->photo }}" alt="">
                    @endif
                </td>
            </tr>
        </table>
    </div>
</div>

@endsection
