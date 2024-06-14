@extends('front.back')
@section('content')

        <!-- start banner Area -->
        <section class="banner-area" id="home">	
            <div class="container">
                <div class="row fullscreen d-flex align-items-center justify-content-start">
                    <div class="banner-content col-lg-7">
                        <h5 class="text-white text-uppercase">Author: Travor James</h5>
                        <h1 class="text-uppercase">
                            New Adventure				
                        </h1>
                        <p class="text-white pt-20 pb-20">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp <br> or incididunt ut labore et dolore magna aliqua. Ut enim ad minim.
                        </p>
                        
                    </div>
                    <div class="col-lg-5 banner-right">
                        <img class="img-fluid" src="storage/front/img/header-img.png" alt="">
                    </div>												
                </div>
            </div>
        </section>
        <!-- End banner Area -->	

        <!-- Start about Area -->
        <section class="section-gap info-area" id="about">
            <div class="container">				
                <div class="single-info row mt-40 align-items-center">
                    <div class="col-lg-6 col-md-12 text-center no-padding info-left">
                        <div class="info-thumb">
                            <img src="storage/front/img/about-img.jpg" class="img-fluid info-img" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 no-padding info-rigth">
                        <div class="info-content">
                            <h2 class="pb-30">Dr. Travor James</h2>
                            <p>
                                inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards – especially in the workplace. That’s why it’s crucial that, as women.								
                            </p>
                            <br>
                            <p>
                                inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards – especially in the workplace. That’s why it’s crucial that, as women. inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards – especially in the workplace. That’s why it’s crucial that, as women.									
                            </p>
                            <br>
                            <img src="img/signature.png" alt="">
                            </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End about Area -->
    
      
        
      
        
  
        
        <!-- Start course Area -->
        <section class="course-area section-gap" id="course">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-60 col-lg-9">
                        <div class="title text-center">
                            <h1 class="mb-10">Top Courses That are open for Students</h1>
                            <p>Who are in extremely love with eco friendly system.</p>
                        </div>
                    </div>
                </div>						
                <div class="row">
                    <div class="active-course-carusel">
                        @foreach ($data as $data)
                        <div class="single-course item">
                            <img class="img-fluid" src="{{asset('storage/back/img/'.$data->image)}}" alt="">
                            <p class="sale-btn">For Sale</p>
                            <div class="details">
                                <a href="#"><h4>{{$data->name}} <span class="price float-right">{{$data->price}}</span></h4></a>	
                                <p>
                                    {{$data->description}}
                                </p>
                            </div>
                        </div>
                        @endforeach
                        
							
                    </div>											
                </div>
            </div>	
        </section>
        <!-- End course Area -->
        
 

        <!-- Start testomial Area -->
        <section class="testomial-area section-gap">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-60 col-lg-8">
                        <div class="title text-center">
                            <h1 class="mb-10">What our Reader’s Say about us</h1>
                            <p>Who are in extremely love with eco friendly system.</p>
                        </div>
                    </div>
                </div>						
                <div class="row">
                    
@foreach ($show as $show)
<div class="active-tstimonial-carusel">
    <div class="single-testimonial item">
        <img class="mx-auto" src="{{asset('storage/back/img/'.$show->image)}}" alt="">
        <p class="desc">
           {{$show->description}}
        </p>
        <h4>{{$show->name}}</h4>
        <p>
            {{$show->profession}}
        </p>
    </div>
@endforeach													
                    </div>
                </div>
            </div>	
        </section>
        <!-- End testomial Area -->
        

	
@endsection