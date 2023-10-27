<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Product;
use App\Reviews;
use App\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);

        /*
        $request->validate([
            'title' => 'required',
            'features' => 'required',
            'category_id' => 'required',
            'prod_img' => 'required|image'
        ]);
        */

        $product = new Product();
        $product->title = $request->title;
        $product->features = $request->features;
        $product->category_id = $request->category_id;
        $product->shop_id = $request->shop_id;


        if ($request->hasFile('prod_img')) {
            $imagePath = $request->file('prod_img')->store('products', 'public');

            $product->image_url = $imagePath;
        }
        
    
        $product->save();

        return redirect()->back();


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);

        $similarProducts = Product::where('shop_id', $product->shop_id)->take(6)->get();

        $new = Arr::except($similarProducts, '0');

        $contacts = Contact::where('shop_id', $product->shop_id)->first();

        //$reviews = Reviews::where('product_id', $product->id)->get();
        $shop = Shop::where('id', $product->id)->first();

        
        


        return view('products.show')->with([
            'product' => $product,
            'new' => $new,
            'contacts' => $contacts,
            //'reviews' => $reviews,
            'other_products' => $new,
            'shop' => $shop
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->title = $request->title;
        $product->features = $request->features;
        $product->category_id = $request->category_id;
        $product->shop_id = $request->shop_id;

        if ($request->hasFile('prod_img')) {
            $imagePath = $request->file('prod-img')->store('products', 'public');

            $product->image_url = $imagePath;
        }


        $product->update();

        return redirect()->back()->with('success_message', 'Product updated successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);

        $product->delete();

        return redirect()->back()->with('success_message', 'Product deleted successfully');

    }
}
