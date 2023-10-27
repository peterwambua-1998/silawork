@extends('layouts.app')

@section('content')
<div style="background-color: #FCD900; height: 10vh;">
    <ul class="navbar-nav">
                        
        <form class="form-inline " style=" margin: 0 auto;">
            <input class="form-control mr-sm-2 search" name="query" type="search" placeholder="Search" aria-label="Search" style="width: 50vw; text-align: center;">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
      </ul>
</div>
<div class="container-fluid">
    <div class="row ">
        <div class="col-md-2 category-wrapper mt-4">
            <h5 class="mb-5">Categories
                
                    <img src="https://img.icons8.com/ios-glyphs/30/000000/expand-arrow--v1.png" class="arrow-down"/>
             
                
            </h5>
    
            <div class="categories-display">
                <form>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <p class="form-check-label">
                        Baby Products
                        </p>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <p class="form-check-label">
                        Men's Clothing
                        </p>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <p class="form-check-label">
                            Women's Clothing
                        </p>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <p class="form-check-label">
                            Boy's Clothing
                        </p>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <p class="form-check-label">
                        Electronics
                        </p>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <p class="form-check-label">
                        Home and Kitchen
                        </p>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <p class="form-check-label">
                        Office
                        </p>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <p class="form-check-label">
                        Accessories
                        </p>
                    </div>
                </form>
            </div>
           
            
        </div>
        <div class="col-md-7 mt-3">
            <h3 style="text-align: center;">{{ $queryname }}</h3>

            <hr>

            <div class="row" >

                @if ($count == 0)
                    <div class="col-md-6" style="margin: 0 auto;">
                        <h3 >Sorry no results found. Kindly try another search term</h3>
                    </div>
                @else
                @foreach ($products as $product)
                    
                <div class="col-md-6">
                    
                        <div class="card mb-2" style="width: 18rem; box-shadow: rgba(0, 0, 0, 0.07) 0px 10px 15px -3px, rgba(0, 0, 0, 0.05) 0px 4px 6px -2px; background-color: transparent !important;">
                            <img class="card-img-top img-fluid" src="/storage/{{ $product->image_url }}" alt="Card image cap">
                            <div class="body-card p-2" >
                              
                                <h5 class="card-title" style="color: #E8630A;">{{ $product->title }}</h5>
                                <span>
                                    <a href="{{ route('products.show', $product->id) }}">See More</a>
                                </span>
                                
                            </div>
                            
                        </div>
                    
                </div>
            
                @endforeach
                @endif

                
            </div>
        </div>

        <div class="col-md-3 mt-4">
            <h5 class="mb-5">Popular</h5>
            
                <img class="card-img-top" src="../product-details-page/images/bottle.jpg" alt="Card image cap">
                <div class="body-card p-2" >
                  
                    <h5 class="card-title" style="color: #E8630A;">SweatShirt</h5>
                    <span>
                        <a href="">See More</a>
                    </span>
                    
                </div>

                <br>
                <img class="card-img-top" src="../product-details-page/images/bottle.jpg" alt="Card image cap">
                <div class="body-card p-2" >
                  
                    <h5 class="card-title" style="color: #E8630A;">SweatShirt</h5>
                    <span>
                        <a href="">See More</a>
                    </span>
                    
                </div>
                

        </div>
    </div>
</div>


@endsection
@push('scripts')
    <script src="{{ asset('js/example.js') }}" defer></script>
@endpush