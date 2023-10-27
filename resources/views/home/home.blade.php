@extends('layouts.app')

@section('content')
<div class="container mt-4">
       
    <div class="owl-carousel">
            <div>
                <a href="#">
                    <img class="card-img-top" src="{{ asset('images/baby.jpg') }}" alt="Card image cap" style="border-radius: 5px;">
                </a>
                
                
            </div>
            <div>
                <a href="#">
                    <img class="card-img-top" src="{{ asset('images/baby-stroller.jpeg') }}" alt="Card image cap" style="border-radius: 5px;">
                </a>
                
            </div>
            <div>
                <a href="#">
                    <img class="card-img-top" src="{{ asset('images/baby.jpg') }}" alt="Card image cap" style="border-radius: 5px;">
                </a>
                
            </div>
            <div>
                <a href="#">
                    <img class="card-img-top" src="{{ asset('images/baby-stroller.jpeg') }}" alt="Card image cap" style="border-radius: 5px;">
                </a>
                
            </div>
            <div>
                <a href="#">
                    <img class="card-img-top" src="{{ asset('images/baby.jpg') }}" alt="Card image cap" style="border-radius: 5px;">
                </a>
               
            </div>
            <div>
                <a href="#">
                    <img class="card-img-top" src="{{ asset('images/baby-stroller.jpeg') }}" alt="Card image cap" style="border-radius: 5px;">
                </a>
               
            </div>
           
                
            
    </div>
</div>


<div class="container">
    <div class="outer-grid">
        


        <div class="middle">
            <h4 >Health and Beauty</h4>
            <div class="inner-grid">
                @foreach ($product_category3 as $item)
                    <div>
                        <a href="{{ route('products.show', $item->id) }}"><img src="/storage/{{ $item->image_url }}" alt=""></a>
                        <p>{{ Str::limit($item->title, 9) }}</p>
                    </div> 
                @endforeach
                
            </div>
            <p style="text-align: center; margin-top: -20px;">
                <a href="{{ route('search-category', ['query'=> 'Health and Beauty']) }}">see more</a>
            </p>
        </div>

        <div class="middle">
            <h4>Men's Clothing</h4>
            <div class="inner-grid">
                @foreach ($product_category2 as $item)
                    <div>
                        <a href="{{ route('products.show', $item->id) }}"><img src="/storage/{{ $item->image_url }}" alt=""></a>
                        <p>{{ Str::limit($item->title, 9) }}</p>
                    </div> 
                @endforeach
                
            </div>
            <p style="text-align: center; margin-top: -20px;">
                <a href="{{ route('search-category', ['query'=> 'Home and Office']) }}">see more</a>
            </p>
        </div>

        <div class="middle">
            <h4>Women's Clothing</h4>
            <div class="inner-grid">
                @foreach ($product_category13 as $item)
                    <div>
                        <a href="{{ route('products.show', $item->id) }}"><img src="/storage/{{ $item->image_url }}" alt=""></a>
                        <p>{{ Str::limit($item->title, 9) }}</p>
                    </div> 
                @endforeach
            </div>
            <p style="text-align: center; margin-top: -20px;">
                <a href="{{ route('search-category', ['query'=> 'Phone and Tablets']) }}">see more</a>
            </p>
        </div>

        <div class="middle">
            <h4>Computing</h4>
            <div class="inner-grid">
                @foreach ($product_category6 as $item)
                    <div>
                        <a href="{{ route('products.show', $item->id) }}"><img src="/storage/{{ $item->image_url }}" alt=""></a>
                        <p>{{ Str::limit($item->title, 9) }}</p>
                    </div> 
                @endforeach
            </div>
            <p style="text-align: center; margin-top: -20px;">
                <a href="{{ route('search-category', ['query'=> 'Computing']) }}">see more</a>
            </p>
        </div>

    </div>
</div>


<div class="container mb-5" style="text-align: center;">
    <div class="row">
        <div class="col-md-4">
            <div class="two-grid-section">
                <h4>Electronics</h4>
                @foreach ($product_category7 as $item)
                    <div>
                        <a href="{{ route('products.show', $item->id) }}"><img src="/storage/{{ $item->image_url }}" alt=""></a>
                        
                    </div> 
                @endforeach
                <br>
                <a href="{{ route('search-category', ['query'=> 'Electronics']) }}">See More</a>
                
            </div>
        </div>
        <div class="col-md-4">
            <div class="two-grid-section">
                <h4>Pet Supplies</h4>
                @foreach ($product_category8 as $item)
                    <div>
                        <a href="{{ route('products.show', $item->id) }}"><img src="/storage/{{ $item->image_url }}" alt=""></a>
                        
                    </div> 
                @endforeach
                <br>
                <a href="{{ route('search-category', ['query'=> 'Pet Supplies']) }}">See More</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="two-grid-section">
                <h4>Fashion</h4>
                @foreach ($product_category9 as $item)
                    <div>
                        <a href="{{ route('products.show', $item->id) }}"><img src="/storage/{{ $item->image_url }}" alt=""></a>
                        
                    </div> 
                @endforeach
                <br>
                <a href="{{ route('search-category', ['query'=> 'Fashion']) }}">See More</a>
            </div>
        </div>
        
    </div>
</div>

<div class="container">
    <div class="outer-grid">
        


        <div class="middle">
            <h4 >Automobile</h4>
            <div class="inner-grid">
                @foreach ($product_category10 as $item)
                    <div>
                        <a href="{{ route('products.show', $item->id) }}"><img src="/storage/{{ $item->image_url }}" alt=""></a>
                        
                    </div> 
                @endforeach
            </div>
            <p style="text-align: center; margin-top: -20px;">
                <a href="{{ route('search-category', ['query'=> 'Automobile']) }}">see more</a>
            </p>
        </div>

        <div class="middle">
            <h4>Baby Products</h4>
            <div class="inner-grid">
                @foreach ($product_category1 as $item)
                    <div>
                        <a href="{{ route('products.show', $item->id) }}"><img src="/storage/{{ $item->image_url }}" alt=""></a>
                        <p>{{ Str::limit($item->title, 9) }}</p>
                    </div> 
                @endforeach
               
                
            </div>
            <p style="text-align: center; margin-top: -20px;">
                <a href="{{ route('search-category', ['query'=> 'Baby Products']) }}">see more</a>
            </p>
        </div>

        <div class="middle">
            <h4>Spoting Products</h4>
            <div class="inner-grid">
                @foreach ($product_category11 as $item)
                    <div>
                        <a href="{{ route('products.show', $item->id) }}"><img src="/storage/{{ $item->image_url }}" alt=""></a>
                        
                    </div> 
                @endforeach
            </div>
            <p style="text-align: center; margin-top: -20px;">
                <a href="{{ route('search-category', ['query'=> 'Spoting Products']) }}">see more</a>
            </p>
        </div>

        <div class="middle">
            <h4>Garden and Outdoors</h4>
            <div class="inner-grid">
                @foreach ($product_category12 as $item)
                    <div>
                        <a href="{{ route('products.show', $item->id) }}"><img src="/storage/{{ $item->image_url }}" alt=""></a>
                        
                    </div> 
                @endforeach
            </div>
            <p style="text-align: center; margin-top: -20px;">
                <a href="{{ route('search-category', ['query'=> 'Garden and Outdoors']) }}">see more</a>
            </p>
        </div>

    </div>
</div>


<div class="container" style="text-align: center;">
    <div class="row">
        <div class="col-md-4">
            <div class="two-grid-section">
                <h4>Electronics</h4>
                @foreach ($product_category7 as $item)
                        <div>
                            <a href="{{ route('products.show', $item->id) }}"><img src="/storage/{{ $item->image_url }}" alt=""></a>
                           
                        </div> 
                    @endforeach
                <br>
                <a href="{{ route('search-category', ['query'=> 'Electronics']) }}">See More</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="two-grid-section">
                <h4>Pet Supplies</h4>
                @foreach ($product_category8 as $item)
                        <div>
                            <a href="{{ route('products.show', $item->id) }}"><img src="/storage/{{ $item->image_url }}" alt=""></a>
                           
                        </div> 
                    @endforeach
                <br>
                <a href="{{ route('search-category', ['query'=> 'Pet Supplies']) }}">See More</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="two-grid-section">
                <h4>Phone and Tablets</h4>
                
                    @foreach ($product_category5 as $item)
                        <div>
                            <a href="{{ route('products.show', $item->id) }}"><img src="/storage/{{ $item->image_url }}" alt=""></a>
                           
                        </div> 
                    @endforeach
                
                <br>
                <a href="{{ route('search-category', ['query'=> 'Phone and Tablets']) }}">See More</a>
            </div>
        </div>
        
    </div>
</div>

@endsection
