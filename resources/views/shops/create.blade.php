@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <h2 style="text-align: center;">SHOP SETUP</h2>
        <form action="{{ route('shop.store') }}" method="POST" style="border: 2px solid black; padding: 20px; border-radius: 10px;" enctype="multipart/form-data">

            @csrf
            <h3>Shop Details</h3>
            <div class="form-group">
              <label for="exampleInputEmail1">
                  Shop Title</label>
              <input type="text" class="form-control" id="shop"  placeholder="Enter Shop Title" name="shop_title" required>
              <span class="text-danger" id="shop_error"></span>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Description</label>
              <input type="text" class="form-control" id="decription" placeholder="Enter Description" name="shop_decription" required>
              <span class="text-danger" id="description_error"></span>
            
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Location</label>
                <input type="text" class="form-control" id="location" placeholder="Enter Description" name="shop_location" required>
                <span class="text-danger" id="location_error"></span>
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Shop Logo</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="shop_img" required>
            </div>
            
            <input type="hidden" name="user" value="{{ Auth::user()->id }}">

            <div class="mt-5 mb-5">
                <hr>
            </div>
            
            <h3>Contact Details</h3>
                <div class="form-group">
                    <label for="exampleInputEmail1">Phone Number</label>
                    <input type="text" class="form-control" id="pnumber"  placeholder="Enter Phone Number" name="shop_pnumber" required>
                    <span class="text-danger" id="pnumber_error"></span>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email Address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1"  placeholder="Enter Email Address" name="shop_email" required>
                    <span class="text-danger" id="pnumber_error"></span>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Facebook Profile/Page (optional)</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter @" name="shop_fb">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Instagram Profile/Page (optional)</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter @" name="shop_ig">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Twitter Profile/Page (optional)</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter @" name="shop_tw">
                </div>

            <div class="mt-5 mb-4">
                <hr>
            </div>

            


            <div class="add-product">
                <div class="form-group">
                    <label for="exampleInputEmail1">Product Title</label>
                    <br>
                    <label for="">Eg: [Product Name] [Colors Offered]  [Sizes if any]</label>
                    <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Eg: [Product Name] [Colors Offered] [Sizes if any]" name="prod_title">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Product Description</label>
                    <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Detailed Product Description" name="prod_descr">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Select Category</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="category_id">
                      <option>---- select category ----</option>
                      @foreach ($categories as $category)
                        
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                                           
                      @endforeach

                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlFile1">Product Image</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="product_img" required>
                  </div>
            </div>
                

            <button type="submit" class="btn"  style="background-color: #E8630A;">Submit</button>
        </form>
</div>
@endsection

@push('script')
<script defer>
    $(document).ready(function() {
        $('.add-product').hide();

        $('.show-product').on('click', function() {
            $('.add-product').toggle('slow');
        });

        
    });
</script>
@endpush

