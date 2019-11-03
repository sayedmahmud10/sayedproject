

@extends ('layouts.app');

@section('content')
<center>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
    <div class="carousel-item active">
    <img class="d-block w-100" src="/storage/cover_images/1.jpg" alt="First slide">
       </div>
    <div class="carousel-item">
    <img class="d-block w-100" src="/storage/cover_images/2.jpg" alt="Second slide">
       </div>
    <div class="carousel-item">
    <img class="d-block w-100" src="/storage/cover_images/3.jpg" alt="Third slide">
       </div>
       </div>
   <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
   <span class="sr-only">Previous</span>
       </a>
   <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
   <span class="carousel-control-next-icon" aria-hidden="true"></span>
   <span class="sr-only">Next</span>
       </a>
       </div>
</center>

</div>
</div>
</div>


<h1>{{$title}}   </h1>
<p>Contact : 01833400688
    Address : North South University
</p>    

@endsection