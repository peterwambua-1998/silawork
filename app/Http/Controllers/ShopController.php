<?php

namespace App\Http\Controllers;

use App\Category;
use App\Contact;
use App\Product;
use App\Shop;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
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
        $categories = Category::all();
        return view('shops.create')->with([
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $shop = new Shop();
        $shop->user_id = $request->user;
        $shop->title = $request->shop_title;
        $shop->description = $request->shop_decription;
        if ($request->hasFile('shop_img')) {
            $imagePath = $request->file('shop_img')->store('shop', 'public');

            $shop->img_url = $imagePath;
        }

        $shop->save();

        $contacts = new Contact();
        $contacts->shop_id = $shop->id;
        $contacts->phone_1 = $request->shop_pnumber;   
        $contacts->email_1 = $request->shop_email;
        $contacts->location = $request->shop_location;

        if ($request->shop_ig !== null) {
            $contacts->ig_profile  = $request->shop_ig;
        };

        if ($request->shop_tw !== null) {
            $contacts->twitter_profile  = $request->shop_tw;
        };

        if ($request->shop_fb !== null) {
            $contacts->facebook_profile  = $request->shop_fb;
        };

        $contacts->save();

        
        if ($request->has('product_img')) {
            $product = new Product();
            $product->title = $request->prod_title;
            $product->features = $request->prod_descr;
            $product->category_id = $request->category_id;
            $product->shop_id = $shop->id;

            if ($request->hasFile('product_img')) {
                $imagePath = $request->file('product_img')->store('products', 'public');

                $product->image_url = $imagePath;
            }

            $product->save();
        }

        
        

        $categories = Category::all();

        
        $user = User::where('id',$shop->user_id)->first();
        $hashedEmail = md5($user->email);
        return redirect()->route('shop.show', $shop->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $shop = Shop::find($id);

        $produts = Product::where('shop_id', '=', $shop->id)->get();

        $contact = Contact::where('shop_id', $shop->id)->first();

        $user = User::where('id',$shop->user_id)->first();

        $hashedEmail = md5($user->email);

        $categories = Category::all();

        return view('shops.show')->with([
            'shop' => $shop,
            'products' => $produts,
            'contact' => $contact,
            'hashedEmail' => $hashedEmail,
            'user' => $user,
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function edit(Shop $shop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $shop = Shop::find($id);
        $shop->user_id = $request->user;
        $shop->title = $request->shop_title;
        $shop->description = $request->shop_decription;
        if ($request->hasFile('shop_img')) {
            $imagePath = $request->file('shop_img')->store('shop', 'public');

            $shop->img_url = $imagePath;
        }
        $shop->update();

        $contacts = Contact::where('shop_id', $shop->id)->first();
        $contacts->phone_1 = $request->shop_pnumber;   
        $contacts->email_1 = $request->shop_email;
        $contacts->location = $request->shop_location;

       
            $contacts->ig_profile  = $request->shop_ig;
        

        
            $contacts->twitter_profile  = $request->shop_tw;
        

       
            $contacts->facebook_profile  = $request->shop_fb;
        

        $contacts->update();
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shop $shop)
    {
        //
    }
}
