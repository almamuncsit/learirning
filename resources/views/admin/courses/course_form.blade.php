@extends('admin.layout.layout')


@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">
        @if ($course->id)
            Update Courese
        @else
            Add new Course
        @endif

    </h1>
</div>


<div class="row clearfix">
    <div class="col-md-2"></div>
    <div class="col-md-8">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">  Course List </h6>
            </div>

            <div class="card-body">

                <form action=" {{ url('admin/courses/' . $course->id) }} " method="POST" enctype="multipart/form-data">
                    @if ($course->id)
                        @method('PUT')
                    @endif

                    @csrf
                    <div class="form-group">
                        <label for="title"> Course Title </label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror"
                            name="title" placeholder="Enter Course Title"
                            required
                            value="{{ old('title', $course->title) }}"
                        >
                        @error('title')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="category_id"> Course Category </label>
                        <select class="form-control @error('category_id') is-invalid @enderror" name="category_id">
                            <option value=""> Select Category </option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    @if ( $category->id == old('category_id', $course->category_id)) selected @endif
                                > {{ $category->name }} </option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="description"> Course description </label>
                        <textarea rows="10"
                            class="form-control @error('description') is-invalid @enderror"
                            name="description"
                        > {{ old('description', $course->description) }} </textarea>
                        @error('description')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        @if ($course->photo)
                            <img src=" {{ $course->photo }} " alt="" width="100">
                        @endif
                        <br>
                        <label for="photo"> Course photo </label>
                        <input type="file" class="form-control @error('photo') is-invalid @enderror"
                            name="photo" placeholder="Enter Course photo"
                        >
                        @error('photo')
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
