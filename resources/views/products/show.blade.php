@extends('layouts.app')

@section('content')
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-md-6">
            <div class="image-div">
                <img src="{{asset('store/'.$product->image_url)}}" alt="" srcset="" class="img-fluid">
            </div>
        </div>
        <div class="col-md-6">
            <div class="row mb-3">
                <div class="col-md-6">
                    <p style="font-weight: 600; font-size: 17px; letter-spacing:1px; text-decoration: underline;">{{ $product->title }}</p>
                </div>
                <div class="col-md-6">
                    <p style="font-weight: 600; font-size: 17px; letter-spacing:1px; text-decoration: underline;"></p>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-md-12">
                    <p style="font-weight: 600; ">
                        
                        Description
                    </p>
                    <p>
                        {{$product->features}}
                    </p>
                </div>
                
            </div>

            
            
            <h5 style="text-decoration: underline; font-weight: 600;">socials</h5>
            <div class="row">
                
                <div class="col-6 ">
                    <div class="socials">
                        
                        <p style="font-size: 12px; color: #4267B2;">FACEBOOK</p>
                       
                        <p> {{ $contacts->ig_profile }}</p>
                    </div>
                   
                </div>
                <div class="col-6">
                    <div  class="socials">
                        <p style="font-size: 12px; color: #E1306C">INSTAGRAM</p>

                        <p> {{ $contacts->ig_profile }}</p>
                    </div>
                    
                </div>
                <div class="col-6 ">
                    <div class="socials">
                       
                        <p style="font-size: 12px; color: #00acee;">TWITTER</p>

                        <p>{{ $contacts->ig_profile }}</p>
                    </div>
                    
                </div>
                <div class="col-6 ">
                    <div class="socials">
                        
                        <p style="font-size: 12px; color: #E8630A">LINKEDIN</p>


                        <p> {{ $contacts->ig_profile }}</p>
                    </div>
                    
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-sm-4">
                    <p>
                        {{ $contacts->phone_1 }} 

                        @if (isset($contacts->phone_2))
                            / {{ $contacts->phone_2 }}
                        @endif
                    </p>
                </div>
                <div class="col-sm-4">
                    <p>
                        {{ $contacts->email_1 }}
                    </p>
                </div>
                <div class="col-sm-4">
                    <a href="{{ route('shop.show', $shop->id) }}">Click here to visit sellers profile</a> 
                 </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid">
    <hr>
  </div>
  

  <section id="testimonials">
    <!--heading--->
    <div class="testimonial-heading">
        <span>Reviews</span>
        <h1>Clients Says</h1>
    </div>
    <!--testimonials-box-container------>
    <div class="testimonial-box-container">
        <!--BOX-1-------------->
        <div class="testimonial-box">
            <!--top------------------------->
            <div class="box-top">
                <!--profile----->
                <div class="profile">
                    <!--img---->
                    <div class="profile-img">
                        <img src="images/c-1.jpg" />
                    </div>
                    <!--name-and-username-->
                    <div class="name-user">
                        <strong>Touseeq Ijaz</strong>
                        <span>@touseeqijazweb</span>
                    </div>
                </div>
                <!--reviews------>
                <div class="reviews">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i><!--Empty star-->
                </div>
            </div>
            <!--Comments---------------------------------------->
            <div class="client-comment">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat quis? Provident temporibus architecto asperiores nobis maiores nisi a. Quae doloribus ipsum aliquam tenetur voluptates incidunt blanditiis sed atque cumque.</p>
            </div>
        </div>
        <!--BOX-2-------------->
        <div class="testimonial-box">
            <!--top------------------------->
            <div class="box-top">
                <!--profile----->
                <div class="profile">
                    <!--img---->
                    <div class="profile-img">
                        <img src="images/c-2.jpg" />
                    </div>
                    <!--name-and-username-->
                    <div class="name-user">
                        <strong>J.K Rowling</strong>
                        <span>@jkrowling</span>
                    </div>
                </div>
                <!--reviews------>
                <div class="reviews">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i><!--Empty star-->
                </div>
            </div>
            <!--Comments---------------------------------------->
            <div class="client-comment">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat quis? Provident temporibus architecto asperiores nobis maiores nisi a. Quae doloribus ipsum aliquam tenetur voluptates incidunt blanditiis sed atque cumque.</p>
            </div>
        </div>
        <!--BOX-3-------------->
        <div class="testimonial-box">
            <!--top------------------------->
            <div class="box-top">
                <!--profile----->
                <div class="profile">
                    <!--img---->
                    <div class="profile-img">
                        <img src="images/c-3.jpg" />
                    </div>
                    <!--name-and-username-->
                    <div class="name-user">
                        <strong>Harry Potter</strong>
                        <span>@DanielRedclief</span>
                    </div>
                </div>
                <!--reviews------>
                <div class="reviews">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i><!--Empty star-->
                </div>
            </div>
            <!--Comments---------------------------------------->
            <div class="client-comment">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat quis? Provident temporibus architecto asperiores nobis maiores nisi a. Quae doloribus ipsum aliquam tenetur voluptates incidunt blanditiis sed atque cumque.</p>
            </div>
        </div>
        <!--BOX-4-------------->
        <div class="testimonial-box">
            <!--top------------------------->
            <div class="box-top">
                <!--profile----->
                <div class="profile">
                    <!--img---->
                    <div class="profile-img">
                        <img src="images/c-4.jpg" />
                    </div>
                    <!--name-and-username-->
                    <div class="name-user">
                        <strong>Oliva</strong>
                        <span>@Olivaadward</span>
                    </div>
                </div>
                <!--reviews------>
                <div class="reviews">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i><!--Empty star-->
                </div>
            </div>
            <!--Comments---------------------------------------->
            <div class="client-comment">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat quis? Provident temporibus architecto asperiores nobis maiores nisi a. Quae doloribus ipsum aliquam tenetur voluptates incidunt blanditiis sed atque cumque.</p>
            </div>
        </div>
    </div>
</section>


  <div class="container-fluid mt-5">
    <hr>
    <h4>More From This Seller</h4>


    @if (count($other_products) === 5)
    <div class="mt-5 swiffy-slider slider-item-show3 slider-item-reveal slider-nav-outside slider-nav-round slider-nav-visible slider-indicators-outside slider-indicators-round slider-indicators-dark slider-nav-animation slider-nav-animation-fadein slider-item-first-visible">
        
        <ul class="slider-container" >
            @foreach ($other_products as $item)
            {{-- 1600*900 --}}
            <li><img src="{{asset('store/'. $item->image_url)}}" style="max-width: 100%;height: auto;"></li>
            @endforeach
        </ul>
  
        <button type="button" class="slider-nav"></button>
        <button type="button" class="slider-nav slider-nav-next"></button>
  
       
    </div>
   
    @elseif(count($other_products) === 4)
    <div class="mt-5 swiffy-slider slider-item-show2 slider-item-reveal slider-nav-outside slider-nav-round slider-nav-visible slider-indicators-outside slider-indicators-round slider-indicators-dark slider-nav-animation slider-nav-animation-fadein slider-item-first-visible">
        <ul class="slider-container" >
            @foreach ($other_products as $item)
            {{-- 1600*900 --}}
            <li><img src="{{asset('store/'. $item->image_url)}}" style="max-width: 100%;height: auto;"></li>
            @endforeach
            
        </ul>
  
        <button type="button" class="slider-nav"></button>
        <button type="button" class="slider-nav slider-nav-next"></button>
  
       
    </div>
    @elseif(count($other_products) === 3)
    <div class="mt-5 swiffy-slider slider-item-show2 slider-item-reveal slider-nav-outside slider-nav-round slider-nav-visible slider-indicators-outside slider-indicators-round slider-indicators-dark slider-nav-animation slider-nav-animation-fadein slider-item-first-visible">
        <ul class="slider-container" >
            @foreach ($other_products as $item)
            {{-- 1600*900 --}}
            <li><img src="{{asset('store/'. $item->image_url)}}" style="max-width: 100%;height: auto;"></li>
            @endforeach
            
        </ul>
  
        <button type="button" class="slider-nav"></button>
        <button type="button" class="slider-nav slider-nav-next"></button>
  
       
    </div>
    @elseif(count($other_products) === 2)
    <div class="mt-5 swiffy-slider slider-item-show1 slider-item-reveal slider-nav-outside slider-nav-round slider-nav-visible slider-indicators-outside slider-indicators-round slider-indicators-dark slider-nav-animation slider-nav-animation-fadein slider-item-first-visible">
        <ul class="slider-container" >
            @foreach ($other_products as $item)
            {{-- 1600*900 --}}
            <li><img src="{{asset('store/'. $item->image_url)}}" style="max-width: 100%;height: auto;"></li>
            @endforeach
            
        </ul>
  
        <button type="button" class="slider-nav"></button>
        <button type="button" class="slider-nav slider-nav-next"></button>
  
       
    </div>
    @elseif(count($other_products) === 1)
    <div style="height: 20vh" class="mt-5 swiffy-slider slider-item-show1 slider-item-reveal slider-nav-outside slider-nav-round slider-nav-visible slider-indicators-outside slider-indicators-round slider-indicators-dark slider-nav-animation slider-nav-animation-fadein slider-item-first-visible">
        <ul class="slider-container" >
            @foreach ($other_products as $item)
            {{-- 1600*900 --}}
            <li><img src="{{asset('store/'. $item->image_url)}}" style="max-width: 100%;height: auto;"></li>
            @endforeach
            
        </ul>
  
        <button type="button" class="slider-nav"></button>
        <button type="button" class="slider-nav slider-nav-next"></button>
  
       
    </div>
    @endif
    
@endsection
