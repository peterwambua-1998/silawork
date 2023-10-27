<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


        //dd($request);



        $products = DB::table('products')->where('title', 'LIKE', "%{$request->input('query')}%")
                        ->orWhere('features', 'LIKE', "%{$request->input('query')}%")
                        ->get();

        $count = count($products);
        $queryName = $request->get('query');
        return view('search.index')->with(['products' => $products, 'queryname' => $queryName, 'count' => $count]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function category(Request $request)
    {
        $query = $request->get('query');

        $category = Category::where('title', 'LIKE', $query)->first()->id;

        if($category == null) {
            return redirect()->back();
        }

        $products = Product::where('category_id', '=', $category)->get();

        $count = count($products);

        return view('search.index')->with(['products' => $products, 'queryname' => $query, 'count' => $count]);
    }
}
