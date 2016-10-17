<?php

namespace DirectoryApp\Http\Controllers\Guest;

use Illuminate\Http\Request;

use DirectoryApp\Http\Requests;
use DirectoryApp\Http\Controllers\Controller;
use DirectoryApp\Models\Category;
use DirectoryApp\Models\Listing;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cats = Category::all();
        $subcats = Category::where('parent_id', '>', '0')->get();        
        return view('guests.index')
            ->with('cats', $cats)
            ->with('subcats', $subcats);
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
        // $cat = Category::find($id);
        // if (!$cat) {
        //     return redirect()->route('business.index');               
        // }
        // $busniesss =  $cat->listings()->get();
        // $cats = Category::all();
        // return view('guests.show')
        //         ->with('busniesss', $busniesss)
        //         ->with('cats', $cats);
    }

    public function show_business_subcategory($id)
    {
        $cat = Category::find($id);
        if (!$cat) {
            return redirect()->route('business.index');               
        }
        $busniesss =  $cat->listings()->get();
        $cats = Category::all();
        return view('guests.show')
                ->with('busniesss', $busniesss)
                ->with('cats', $cats);
    } 

    public function show_subcat_in_cat($id)
    {
        $cat = Category::find($id);
        $subcats = Category::where('parent_id', $id)->get();
        if (!$subcats) {
            return redirect()->route('business.index');               
        }

        return view('guests.show_subcat_in_cat')
                ->with('cat', $cat)
                ->with('subcats', $subcats);
                
    }    

    public function show_single_business($id)
    {
        $business = Listing::find($id);
        if (!$business) {
            return redirect()->route('business.index');               
        }
        
        return view('guests.show_single_business')
                ->with('business', $business);   
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
}
