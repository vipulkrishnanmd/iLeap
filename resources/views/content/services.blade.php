@extends('layouts.app')

<script src="//cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>
<script type="text/javascript">
  var options = {
    valueNames: [ 'name', 'born' ]
  };

  var userList = new List('users', options);
</script>

@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>  
<script src="//cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>
<script type="text/javascript">
  var monkeyList = new List('test-list', {
    valueNames: ['name'],
    page: 3,
    pagination: true
  }); 
</script>

<section class="templateux-hero"  data-scrollax-parent="true">
  <!-- <div class="cover" data-scrollax="properties: { translateY: '30%' }"><img src="images/hero_2.jpg" /></div> -->

  <div class="container">
    <div class="row align-items-center justify-content-center intro">
      <div class="col-md-10" data-aos="fade-up">
        <h1>Find a Service</h1>
        <p class="lead">Find a service on the internet. See the popular categories below. Use the search box to filter.</p>
        <a href="#next" class="go-down js-smoothscroll"></a>
      </div>
    </div>
  </div>
</section>
<!-- END templateux-hero -->

<section class="templateux-portfolio-overlap" id="next">
  <div class="container-fluid">

    <div class="row">
      <div class="col-lg-4 col-md-6" data-aos="fade-up">
        <a class="project animsition-link" href="{{url('/service/35')}}">
          <figure>
            <img src="images/social-media.jpg" alt="Free Template" class="img-fluid">  
          </figure>
          <div class="project-hover">
            <div class="project-hover-inner">
              <h2>Social Media</h2>
              <span>Connect with your friends and family and meet new friends in the digital world!</span>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <a class="project animsition-link" href="{{url('/service/28')}}">
          <figure>
            <img src="images/news.jpg" alt="Free Template" class="img-fluid">  
          </figure>
          <div class="project-hover">
            <div class="project-hover-inner">
              <h2>News</h2>
              <span>Read the news online and get updates much faster than any other news medias!</span>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <a class="project animsition-link" href="{{url('/service/45')}}">
          <figure>
            <img src="images/hollywood.jpg" alt="Free Template" class="img-fluid">  
          </figure>
          <div class="project-hover">
            <div class="project-hover-inner">
              <h2>Movies</h2>
              <span>Yes!! Watch movies online. You may need a subscription but it is worthy.</span>
            </div>
          </div>
        </a>
      </div>

    </div>


</div>
</section>
<br><br><br><br>

<section class="templateux-portfolio-overlap" id="next">
  <div class="container-fluid">
    <!-- List section -->
    <div class="list-group" data-aos="fade-up" id='myUL'>
      <a class="list-group-item active">
        <input type="text" id="myInput" onkeyup="myFunction();" placeholder="Search for services.." title="Type in a name" class="form-control form-control-lg form-control-borderless">
      </a>
      @foreach ($services as $service)
      <a href="/service/{{$service->id}}" class="list-group-item list-group-item-action">{{ $service->service }}</a>
      @endforeach
    </div>
  </div>
</section>

<script>
  function myFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("a");
    for (i = 1; i < li.length; i++) {
        a = li[i];
        if (a.innerHTML.toUpperCase().startsWith(filter)) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
          }
        }
      }
      </script>
@endsection