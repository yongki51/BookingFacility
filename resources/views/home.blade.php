@extends('layouts.app')

@section('content')

<section id="cover">
     <div id="cover-caption">
         <div id="container">
             <div class="col-sm-10 col-sm offset-1">
                 <h1 class="display-3">BOOK YOUR FACILITY NOW</h1>
                 <br></br>
               
                 <a class="btn btn-success text-center" href="/booking" role="button">BOOK NOW</a>

             </div>
         </div>
     </div>
 </section>

 <div class="card">
 <div class="card-header text-center">
   <h1> Our Facility</h1>
  </div>
  <div class="row row-cols-1 row-cols-md-3">
  <div class="col">
    <div class="card-body w-50">
      <img src="{{('img/gym.jpg')}}" class="card-img-top" alt="...">
    </div>
  </div>
  <div class="col">
    <div class="card-body w-50">
      <img src="{{('img/function.jpg')}}" class="card-img-top" alt="...">
    </div>
  </div>
  <div class="col">
    <div class="card-body w-50">
      <img src="{{('img/kolamrenang.png')}}" class="card-img-top" alt="...">
    </div>
  </div>
  <div class="col">
    <div class="card-body w-50">
      <img src="{{('img/lapbasket.jpg')}}" class="card-img-top" alt="...">
    </div>
  </div>
  <div class="col">
    <div class="card-bod w-50">
      <img src="{{('img/laptenis.jpeg')}}" class="card-img-top" alt="...">
    </div>
  </div>
</div>
</div>

@endsection
