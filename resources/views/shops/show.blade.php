@extends('layouts.app')

@section('content')

<div class="container mt-5">
  @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
  @endif
    <div>
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-sm-3" class="div-img-brand">
                        <img src="{{asset('store/'.$shop->img_url)}}" alt="shop"  class="brand-img" width="150px">
                    </div>
                    <div class="col-sm-6" >
                        
                        <h3 style="text-decoration: underline;">{{ $shop->title }}</h3>

                        <br>
                        <P>{{ $shop->description }}</P>
                    </div>
                </div>
                
            </div>

            <div class="col-md-4" >

                @if ($shop->user_id === $user->id)
                <button class="btn" style="background-color: #FCD900; box-shadow: rgba(0, 0, 0, 0.07) 0px 10px 15px -3px, rgba(0, 0, 0, 0.05) 0px 4px 6px -2px;" data-toggle="modal" data-target="#addProductModal">Add products</button>
                <button class="btn " style="background-color: #E8630A; box-shadow: rgba(0, 0, 0, 0.07) 0px 10px 15px -3px, rgba(0, 0, 0, 0.05) 0px 4px 6px -2px;" data-toggle="modal" data-target="#editShop">Edit Shop Details</button>
                @endif
                
            </div>
        </div>
    </div>

   
    <div class="mt-5">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true" >Home</a>
              <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Contact</a>
              <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Social Profile</a>
            </div>
          </nav>
          <div class="tab-content" id="nav-tabContent">

            <!-------------------------------------  Product Page  -------------------------------------------->
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                
                    <div class="row">

                        @foreach ($products as $product)
                            
                            <div class="col-md-4">
                                <div class="card mb-2 mt-2" style="width: 18rem; box-shadow: rgba(0, 0, 0, 0.07) 0px 10px 15px -3px, rgba(0, 0, 0, 0.05) 0px 4px 6px -2px;">
                                    <img class="card-img-top" src="{{asset('store/'.$product->image_url)}}" alt="Card image cap">
                                    <div class="card-body">
                                    
                                        <a href="{{ route('products.show', $product->id) }}"><h5 class="card-title" style="color: #E8630A;">{{ Str::limit($product->title, 20) }}</h5></a>
                                        {{--
                                        <div class="price-tag" style="margin-top: -110px; position: absolute;">
                                         KSH {{ $product->price }} 
                                        </div>
                                        --}}
                                        @if ($shop->user_id === $user->id)
                                        <div class="row mt-1">
                                            <div class="col-4">
                                                <a href="#" data-toggle="modal" data-target="#editProductModal{{ $product->id }}">
                                                    <img src="https://img.icons8.com/fluency/28/000000/pencil-tip.png" />
                                                    <p>Edit</p>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a href="#" data-toggle="modal" data-target="#deleteProductModal{{ $product->id }}">
                                                    <img src="https://img.icons8.com/fluency/28/000000/filled-trash.png"/>
                                                    <p>Delete</p>
                                                </a>
                                            </div>
                                        </div>
                                        @endif
                                        
                                    </div>
                                    
                                </div>
                            </div>

                        @endforeach
                        
                    </div>    
            
                        


                        
                   
            </div>

            <!-------------------------------------  Product Page End -------------------------------------------->


            <!-------------------------------------  About Page  -------------------------------------------->
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="card mt-2">
                    <div class="card-header" style="color: black;">
                      Profile
                    </div>
                    <div class="card-body" style="color: black; font-weight: 600;">

                        <div class="row">

                            
                                
                            
                            <div class="col-md-6 mb-4">
                                <div style="line-height: 10px;">
                                    <p style="color: rgb(107, 114, 128);">Phone</p>
                                    <p style="color: black;">
                                        {{ $contact->phone_1 }} 

                                        @if ($contact->phone_2 !== null)
                                        / {{ $contact->phone_2 }}
                                        @endif
                                       
                                    </p>
                                </div>
                                
                            </div>
                            <div class="col-md-6 mb-4">
                                <div style="line-height: 10px;">
                                    <p style="color: rgb(107, 114, 128);">Email</p>
                                    <p>{{ $contact->email_1 }} / {{ $contact->email_2 }}</p>
                                </div>
                                
                            </div>
                        

                        
                            <div class="col-md-6 mb-4">
                                <div style="line-height: 10px;">
                                    <p style="color: rgb(107, 114, 128);">Location</p>
                                    <p>{{ $contact->location }}</p>
                                </div>
                                
                            </div>
                            <div class="col-md-6 mb-4">
                                <div style="line-height: 10px;">
                                    <p style="color: rgb(107, 114, 128);">Email</p>
                                    <p>info@myshop.com</p>
                                </div>
                                
                            </div>

                            
                        </div>

                       
                    </div>
                  </div>
            </div>
            <!-------------------------------------  About Page end  -------------------------------------------->



            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
          </div>
    </div>


</div>


@auth
    

    


{{------------------------------ modals ----------------------------}}
<div class="modal fade" id="editShop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="{{ route('shop.update', $shop->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <h3>Shop Details</h3>
            <div class="form-group">
              <label for="exampleInputEmail1">Shop Title</label>
              <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Enter Shop Title" name="shop_title" required value="{{ $shop->title }}">
              
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Description</label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Description" name="shop_decription" required value="{{ $shop->description }}">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Location</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Description" name="shop_location" required value="{{ $contact->location }}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Shop Logo</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="shop_img">
              </div>
              <input type="hidden" name="user" value="{{ Auth::user()->id }}">

              <div class="mt-5 mb-5">
                <hr>
            </div>
            
            <h3>Contact Details</h3>
                <div class="form-group">
                    <label for="exampleInputEmail1">Phone Number</label>
                    <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Enter Phone Number" name="shop_pnumber" required value="{{ $contact->phone_1 }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email Address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1"  placeholder="Enter Email Address" name="shop_email" required value="{{ $contact->email_1 }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Facebook Profile/Page (optional)</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter @" name="shop_fb" value="{{ $contact->facebook_profile }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Instagram Profile/Page (optional)</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter @" name="shop_ig" value="{{ $contact->ig_profile }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Twitter Profile/Page (optional)</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter @" name="shop_tw" value="{{ $contact->twitter_profile }}">
                </div>


              <button type="submit" class="btn btn-primary">Submit</button>
            </form>    
      </div>
      
    </div>
  </div>
</div>






@foreach ($products as $item)
<div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
          
              <div class="form-group">
                <label for="exampleInputPassword1">Title</label>
                <br>
                <label for="">Eg: [Product Name] [Colors Offered] [Sizes if any]</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Eg: [Product Name] [Colors Offered] [Sizes if any]" name="title" required >
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1">Description</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="" name="features" required >
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
                  <input type="file" class="form-control-file" id="exampleFormControlFile1" name="prod_img">
                </div>

                <input type="hidden" name="shop_id" value="{{ $shop->id }}">
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>    
      </div>
      
    </div>
  </div>
</div> 
@endforeach



@foreach ($products as $product)

<div class="modal fade" id="editProductModal{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">

                @csrf
                @method('PATCH')
            
                <div class="form-group">
                  <label for="exampleInputPassword1">Title</label>
                  <br>
                  <label for="">Eg: [Product Name] [Colors Offered] [Sizes if any]</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Eg: [Product Name] [Colors Offered] [Sizes if any]" name="title" required value="{{ $product->title}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Features</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="" name="features" required value="{{ $product->features }}">
                </div>

                <div class="form-group">
                   <span class="alart alert-danger"> Select Category</span>
                    <select class="form-control" id="exampleFormControlSelect1" name="category_id">
                      <option>---- select category ----</option>
                      @foreach ($categories as $category)
                        
                        @foreach ($categories as $category)
                        <option @if($category->id == $item->category_id) selected @endif value="{{ $category->id }}">{{ $category->title }}</option>
                      @endforeach
                                           
                      @endforeach

                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlFile1">Product Image</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="prod_img">
                  </div>

                  <input type="hidden" name="shop_id" value="{{ $shop->id }}">
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>    
        </div>
        
      </div>
    </div>
</div>

@endforeach



@foreach ($products as $product)

<div class="modal fade" id="deleteProductModal{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delete Product</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <p>You want to delete {{ $product->title }}</p>
                
                <button type="submit" class="btn btn-danger">Submit</button>
            </form>    
        </div>
        
      </div>
    </div>
</div>

@endforeach

@endauth

@endsection
