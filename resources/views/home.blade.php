@extends('layouts.master')
@section('content')

    <div id="carouselExample" class="carousel slide">
    
      <div class="carousel-inner">
      @foreach ($sliders as $item)
        <div class="carousel-item active">
          <img src="{{$item->file}}" class="d-block h-slider w-100"  alt="...">
        </div>
       
        @endforeach
        </div>



       
      
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
      </div>
    
    
    <div class="container mt-5 mb-5">
      <div class="row ">
        <div class="h1 text-center">Layanan Kami</div>
        @foreach ($services as $item)
         
          <div class="col-sm-12 col-md-6 col-lg-4">
          
            <div class="border-card p-4 border-radius" >
              <b>web design</b>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero quibusdam, accusantium perspiciatis.</p>
            </div>
            </div>

            @endforeach

          
          
          
          <div class="container mt-5 mb-5">
            <div class="row ">
              <div class="h1 text-center">Artikel</div>
              @foreach ($blogs as $item)
              <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="card" style="width: 18rem;">
                  <img src="images (5).jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                   
                    <a href="#" class="btn btn-primary">Read More</a>
                  </div>
                  
                </div>
                @endforeach
              </div>
             
              
                
              </div>
              

     
    </div>


   
@endsection