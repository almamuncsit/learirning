@extends('frontend.layout.frontend')

@section('content')

<div class="page-header">
    <div class="container">
        <h1> {{ $lesson->title }}  </h1>
    </div>
</div>


<div class="lesson-detials">
    <div class="">

         <div class="row clearfix">
            <div class="col-md-3">
                <div class="course-left">
                    <h2 class="text-center"> {{ $course->title }} </h2>
                    <div class="course-lessson">
                        <ol>
                            @foreach ($course->lessons as $lsn )
                                <li class="@if ($lsn->id == $lesson->id) active-lesson @endif">
                                    <a href=" {{ route('lessons.details', ['lesson'=> $lsn->id, 'slug'=> Str::slug($lsn->title)]) }} " class="nav-link"> {{ $lsn->title }} </a>
                                </li>
                            @endforeach
                        </ol>
                    </div>
                </div>
            </div>

            <div class="col-md-9">
                <div class="lesson-content">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item embed-item" src="{{ $lesson->video_url }}" allowfullscreen></iframe>
                    </div>
                    <h1 class="mt-3"> {{ $lesson->title }} </h1>
                    <small> <b>Published at: </b> {{ $lesson->created_at }} </small>
                    <p class="mt-4"> {{ $lesson->description }} </p>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
