<?php

namespace App\Http\Controllers;

use App\Category;
use App\Catgeory;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $categories1 = Category::find(1);
        $categories2 = Category::find(2);
        $categories3 = Category::find(3);
        $categories4 = Category::find(4);
        $categories5 = Category::find(5);
        $categories6 = Category::find(6);
        $categories7 = Category::find(7);
        $categories8 = Category::find(8);
        $categories9 = Category::find(9);
        $categories10 = Category::find(10);
        $categories11 = Category::find(11);
        $categories12 = Category::find(12);
        $categories13 = Category::find(13);

        $products_category1 = Product::where('category_id', $categories1->id)->take(4)->get();
        $products_category2 = Product::where('category_id', $categories2->id)->take(4)->get();
        $products_category3 = Product::where('category_id', $categories3->id)->take(4)->get();
        $products_category4 = Product::where('category_id', $categories4->id)->take(4)->get();
        $products_category5 = Product::where('category_id', $categories5->id)->take(4)->get();
        $products_category6 = Product::where('category_id', $categories6->id)->take(4)->get();
        $products_category7 = Product::where('category_id', $categories7->id)->take(1)->get();
        $products_category8 = Product::where('category_id', $categories8->id)->take(1)->get();
        $products_category9 = Product::where('category_id', $categories9->id)->take(1)->get();
        $products_category10 = Product::where('category_id', $categories10->id)->take(4)->get();
        $products_category11 = Product::where('category_id', $categories11->id)->take(4)->get();
        $products_category12 = Product::where('category_id', $categories12->id)->take(4)->get();
        $products_category13 = Product::where('category_id', $categories13->id)->take(4)->get();

        

        return view('home.home')->with([
            //categories
            'categories1' => $categories1,
            'categories2' => $categories2,
            'categories3' => $categories3,
            'categories4' => $categories4,
            'categories5' => $categories5,
            'categories6' => $categories6,
            'categories7' => $categories7,

            //products
            'product_category1' => $products_category1,
            'product_category2' => $products_category2,
            'product_category3' => $products_category3,
            'product_category4' => $products_category4,
            'product_category5' => $products_category5,
            'product_category6' => $products_category6,
            'product_category7' => $products_category7,
            'product_category8' => $products_category8,
            'product_category9' => $products_category9,
            'product_category10' => $products_category10,
            'product_category11' => $products_category11,
            'product_category12' => $products_category12,
            'product_category13' => $products_category13,
        ]); 
    }
}
