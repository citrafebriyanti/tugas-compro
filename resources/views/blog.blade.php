@extends('layouts.master')
@section('content')


  <div class="container mt-5">
    <div class="row">
      <div class="col-8  p-4 border-radius">
        <div class="container mt-5">
        @foreach($blogs as $item)
          <div class="row">
         
            <div class="col-4   border-radius">


              <img src="images (5).jpg" class="d-block w-100" alt="...">
            </div>
            <div class="col-8  p-4 border-radius">
              <h2>merawat kecantikan</h2>
              <p>12 september 2024</p>
              <a>Read More</a>
            </div>
          </div>
@endforeach
        </div>
      </div>
      <div class="col-4 p-4 border-radius">
        <h3>Blog terbaru</h3>

        <div class="container mt-5">
          <div class="row">
            @foreach($blog_terbaru as $item)
            <div class="col-3   border-radius">
              <img src="images (5).jpg" class="d-block h-slider w-100 border-radius"
                style="max-width: 1000px; height: 100%;" alt="...">
            </div>
            <div class="col-9 border-card  border-radius">
              <h4>merawat kecantikan</h4>
              <p>12 september 2024</p>
            </div>
            <br>
            @endforeach
           
          </div>
        </div>
      </div>
      <div class="container mt-5">
        <h2>Blog Lainnya</h2>
        <div class="row">
          <div class="col-6">
          @foreach($blog_lainnya as $item)
            <div class="row">
              <div class="col-3">
                <img src="images (5).jpg" class="card-img-top w-100 h-100">
              </div>
              <div class="col-9">
                <h6>merawat kecantikan</h6>
                <p> 12 september 2024</p>
                <a  class="text-black" link rel="stylesheet" href="{{route('BlogDetail.index',$item->slug)}}">Read More</a>
                
              </div>
            </div>
            @endforeach
          </div>
          <div class="col-6">
            <div class="col-6">
              <div class="row">
                <div class="col-3">
                  <img src="images (5).jpg" class="card-img-top w-100 h-100">
                </div>
                <div class="col-9">
                  <h6>merawat kecantikan</h6>
                  <p> 12 september 2024</p>
                  <a href="" class="text-black" link rel="stylesheet" href="">Read More</a>
                </div>
              </div>
            </div>
          </div>
          </div>
          







          
@endsection