@extends('frontend.layout.frontend')


@section('content')
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://jssors8.azureedge.net/demos/image-slider/img/faded-monaco-scenery-evening-dark-picjumbo-com-image.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5> Welcome to ArtofCSE </h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://jssors8.azureedge.net/demos/image-slider/img/px-beach-daylight-fun-1430675-image.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5> learing is online </h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://jssors8.azureedge.net/demos/image-slider/img/faded-monaco-scenery-evening-dark-picjumbo-com-image.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5> learing is online </h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>


    <div class="home-content">
        <div class="container">
            <div class="row clearfix">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <h1 class="text-center"> Welcome to eLearing </h1>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet id deleniti possimus ratione, quibusdam facere eligendi praesentium modi cumque necessitatibus asperiores? Libero officia quo dolores velit eum aut reiciendis itaque!
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet id deleniti possimus ratione, quibusdam facere eligendi praesentium modi cumque necessitatibus asperiores? Libero officia quo dolores velit eum aut reiciendis itaque!
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet id deleniti possimus ratione, quibusdam facere eligendi praesentium modi cumque necessitatibus asperiores? Libero officia quo dolores velit eum aut reiciendis itaque!
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
