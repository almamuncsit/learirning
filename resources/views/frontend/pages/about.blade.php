@extends('frontend.layout.frontend')


@section('content')

<div class="page-header">
    <div class="container">
        <h1> About us </h1>
    </div>
</div>


<div class="home-content">
    <div class="container">
        <div class="row clearfix">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet id deleniti possimus ratione, quibusdam facere eligendi praesentium modi cumque necessitatibus asperiores? Libero officia quo dolores velit eum aut reiciendis itaque!
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet id deleniti possimus ratione, quibusdam facere eligendi praesentium modi cumque necessitatibus asperiores? Libero officia quo dolores velit eum aut reiciendis itaque!
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet id deleniti possimus ratione, quibusdam facere eligendi praesentium modi cumque necessitatibus asperiores? Libero officia quo dolores velit eum aut reiciendis itaque!
                </p>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet id deleniti possimus ratione, quibusdam facere eligendi praesentium modi cumque necessitatibus asperiores? Libero officia quo dolores velit eum aut reiciendis itaque!
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet id deleniti possimus ratione, quibusdam facere eligendi praesentium modi cumque necessitatibus asperiores? Libero officia quo dolores velit eum aut reiciendis itaque!
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet id deleniti possimus ratione, quibusdam facere eligendi praesentium modi cumque necessitatibus asperiores? Libero officia quo dolores velit eum aut reiciendis itaque!
                </p>

                <div id="disqus_thread"></div>
<script>
    /**
    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
    /*
    var disqus_config = function () {
    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://elearning-19.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>



            </div>
        </div>
    </div>
</div>

@endsection
