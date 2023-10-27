@extends('layouts.app')

@section('content')
<div class="container-fluid" style="background-color: #FFD700; height: 70vh; font-family: 'Inconsolata', monospace">
    <div class="row">
        <div class="col-md-6 brand-text" >
            <h3 style="font-weight: 600;">Your Customers Are Waiting </h3>
            <h2 style="font-weight: 700;">MAKE YOUR BRAND VISIBLE</h2>
            
            @if (Auth::check()) 
            <a href="/shop/create">
                <button class="btn call-to-action" style="background-color: #E8630A">Setup Shop</button>
            </a>

            @else 
                
                <a href="{{ route('register') }}">
                    <button class="btn call-to-action" style="background-color: #E8630A">Sign Up -></button>
                </a>
            @endif

        </div>
        <div class="col-md-6 pt-5 sell-image" >
            <img src="/images/sell.png" alt="" >
        </div>
    </div>
</div>

<div class="container mt-2" style="font-family: 'Inconsolata', monospace">
  <h2 style="font-weight: bold; text-decoration: underline;">Start Advertising Today</h2>
  <div class="row mt-5">
    <div class="col-md-6" style="padding-left: 40px;">
      <img src="https://img.icons8.com/fluency/48/000000/country.png" class="ml-3 mb-2" />
      <h4 style="font-weight: bold;">Location</h4>
      <p>Open a shop with us anywhere in Kenya. Rainmaker give you the feel of having your own website.</p>
    </div>
    <div class="col-md-6">
      <img src="https://img.icons8.com/fluency/48/000000/procurement.png" class="ml-3 mb-2"/>
      <h4 style="font-weight: bold;">Genuine Products</h4>
      <p>To open a shop you must sell genuine products. Fake vendors will not be allowed.</p>
    </div>
  </div>
</div>

<div class="container mt-4">
  <h2 style="text-decoration: underline; font-weight: bold;">Instructions</h2>
</div>

<div class="container mt-5" style="font-family: 'Inconsolata', monospace">
  <div class="row">
    <div class="col-md-6" style="padding-left: 40px;">
      <h4 style="font-weight: bold;">Steps to open a shop</h4>
      <h5>1. Register</h5>
      <p>Resgister an account to be able to setup your shop</p>

      <h5>2. Form</h5>
      <p>Fill The form to register your shop with Rainmaker</p>
    </div>
    <div class="col-md-6" style="padding-left: 40px;">
      <h4 style="font-weight: bold;">How to add products</h4>
      <h5>1. Title</h5>
      <p>200 characters max, capitalize the first letter of every word</p>

      <h5>2. Images</h5>
      <p>500 x 500 or 1,000 x 1,000 pixels to increase listing quality</p>

      <h5>3. Description</h5>
      <p>
        Keywords improve the chances that people will find your listing
      </p>
    </div>
  </div>
  
</div>

<div class="container mt-5" style="text-align: center">
    <p style="font-size: 20px;">if interested start by signing up</p>
    @if (Auth::check()) 
    <a href="/shop/create">
        <button class="btn call-to-action" style="background-color: #E8630A">Setup Shop</button>
    </a>

    @else 
        
        <a href="{{ route('register') }}">
            <button class="btn call-to-action" style="background-color: #E8630A">Sign Up</button>
        </a>
    @endif


</div>
@endsection
