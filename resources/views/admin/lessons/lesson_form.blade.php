@extends('admin.layout.layout')


@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">
        @if ($lesson->id)
            Update Lesson
        @else
            Add new Lesson
        @endif

    </h1>
</div>

<div class="row clearfix">
    <div class="col-md-2"></div>
    <div class="col-md-8">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">  Lesson List </h6>
            </div>

            <div class="card-body">

                <form action=" {{ url('admin/lessons/' . $lesson->id) }} " method="POST" enctype="multipart/form-data">
                    @if ($lesson->id)
                        @method('PUT')
                    @endif

                    @csrf
                    <div class="form-group">
                        <label for="title"> Lesson Title </label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror"
                            name="title" placeholder="Enter Lesson Title"
                            required
                            value="{{ old('title', $lesson->title) }}"
                        >
                        @error('title')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="course_id"> Lesson Course </label>
                        <select class="form-control @error('course_id') is-invalid @enderror" name="course_id">
                            <option value=""> Select Course </option>
                            @foreach ($courses as $course)
                                <option value="{{ $course->id }}"
                                    @if ( $course->id == old('course_id', $lesson->course_id)) selected @endif
                                > {{ $course->title }} </option>
                            @endforeach
                        </select>
                        @error('course_id')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="video_url"> Lesson Video URL </label>
                        <input type="text" class="form-control @error('video_url') is-invalid @enderror"
                            name="video_url" placeholder="Enter Lesson Video URL"
                            required
                            value="{{ old('video_url', $lesson->video_url) }}"
                        >
                        @error('video_url')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="description"> Lesson description </label>
                        <textarea rows="10"
                            class="form-control @error('description') is-invalid @enderror"
                            name="description"
                        > {{ old('description', $lesson->description) }} </textarea>
                        @error('description')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>

        </div>

    </div>
</div>

@endsection
