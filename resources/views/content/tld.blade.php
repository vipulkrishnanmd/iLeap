@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('css/w3.css')}}">

<div class="container">
  <section class="templateux-hero"  data-scrollax-parent="true">
    <!-- Heading and Text -->
    <div class="container">
      <div class="row align-items-center justify-content-center intro">
        <div class="col-md-10" data-aos="fade-up">
          <h1>Check your URL</h1>
          <p class="lead">Knowing more about a website keeps you safe in the internet. Before you visit any new website, just have a check here to ensure that your website is safe and free of any malicious content.
            <div class="col-12 col-md-10 col-lg-8">
              <div class="card-body row no-gutters align-items-center">
                <div class="col-auto">
                </div>
                <!--end of col-->
                <div class="col">
                  <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Enter your URL here. (eg http://ileap.me)" id="url" required>
                </div>
                <!--end of col-->
                <div class="col-auto">
                  <button class="btn btn-lg btn-success" id="ajaxSubmit" onclick="validateForm();">Check!</button>
                </div>
                <!--end of col-->
              </div>
            </div>
          </p>

          <div class="row justify-content-center">
            <div id='loading' class="text-center"><br><br></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END templateux-hero -->


  <section class="templateux-portfolio-overlap mb-5" id="next">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12" data-aos="fade-up">
          <div id="card_section">
          </div>
        </div>
      </section>
      <script src="https://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous">
    </script>
    <script>
     jQuery(document).ready(function(){
      jQuery('#ajaxSubmit').click(function(e){
       var x = document.getElementById('url').value;
       if (!ValidURL(x)) {
        alert("Please enter a valid url eg https://google.com");
        return false;
      }
      e.preventDefault();
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      $( "#card_section" ).replaceWith('<div id="card_section" class="text-center"><br><br><img src="/images/loading.gif" width="20%" alt="Loading.." class="img-fluid" width="10"></div>');
      jQuery.ajax({
        url: "{{ url('/geturl') }}",
        method: 'post',
        data: {
          url: jQuery('#url').val()
        },
        success: function(result){
         $( "#card_section" ).replaceWith(result.code);
         result = null;
         window.location.href = "#next";
       }});
    });
    });

     var input = document.getElementById("url");

// Execute a function when the user releases a key on the keyboard
input.addEventListener("keyup", function(event) {
  // Cancel the default action, if needed
  event.preventDefault();
  // Number 13 is the "Enter" key on the keyboard
  if (event.keyCode === 13) {
    // Trigger the button element with a click
    document.getElementById("ajaxSubmit").click();
  }
});

function validateForm() {

}

// function to check if the url is valid
function ValidURL(str) {
  var regex = /((http|https):\/\/(\w+:{0,1}\w*)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%!\-\/]))?)/;
  if(!regex .test(str)) {
    return false;
  } else {
    return true;
  }
}
</script>
@endsection
