<?php

namespace DirectoryApp\Http\Controllers\Users;

use Illuminate\Http\Request;

use DirectoryApp\Http\Requests;
use DirectoryApp\Http\Controllers\Controller;

use DirectoryApp\Models\Listing;
use DirectoryApp\Models\Product;
use Auth;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $products = Product::where('user_id', Auth::user()->id)->get();
        return view('users.products.index')
            ->with('products', $products);
    }

    public function showProduct($business)
    {
        $products = Product::where('listing_id', $business)
                     ->where('user_id', Auth::user()->id)->get();
        $business = Listing::find($business);      
        if (!$products || !$business) {
            return redirect()->route('user.product.index');                        
        }                  
        return view('users.products.index')
            ->with('products', $products);
        
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
        $rules = [
            'product_name' => 'required',
            'product_pic'  => 'mimes:jpeg,png'
        ];
        $this->validate($request, $rules);  
        $listing = Listing::where('user_id', Auth::user()->id)->first();  

        if ($request->hasFile('product_pic')) {
            $product_pic = $request->file('product_pic');
            $product_pic_name = $product_pic->getClientOriginalName();
            $product_pic->move('upload/' . $listing->id . '/product', $product_pic_name);
        }
        $product = new Product;
        $product->product_name  = $request->input('product_name');
        $product->product_price = $request->input('product_price');
        $product->product_pic   = $request->hasFile('product_pic') ?  
                                  $product_pic_name : '';
        $product->user_id       = Auth::user()->id;
        $product->listing_id    =  $listing->id;
        $product->save();

        return redirect()
            ->route('user.product.index')
            ->with('success', 'You have successfully uploaded product image');


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
        $product = Product::find($id);
        if (!$product || $product->user_id !== Auth::user()->id ) {
            return redirect()->route('user.product.index');
        }

        $rules = [
            'product_name' => 'required',
            'product_pic'  => 'mimes:jpeg,png'
        ];

        $this->validate($request, $rules);  
        $listing = Listing::where('user_id', Auth::user()->id)->first();  

        if ($request->hasFile('product_pic')) {
            $product_pic = $request->file('product_pic');
            $product_pic_name = $product_pic->getClientOriginalName();
            $product_pic->move('upload/' . $listing->name . '/product', $product_pic_name);
        }       

        $product->update([
            'product_name'   => $request->input('product_name'),
            'product_price'  => $request->input('product_price'),
            'user_id'        => Auth::user()->id,
            'product_pic'    => $request->hasFile('product_pic') ? $product_pic_name : $product->product_pic,
        ]);

        return redirect()->route('user.product.index');       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        if (!$product || $product->user_id !== Auth::user()->id ) {
            return redirect()->route('user.product.index');
        } 
        $product->delete();

        return redirect()->route('user.product.index');
    }
}
