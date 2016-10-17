<?php

namespace DirectoryApp\Http\Controllers\Users;

use Illuminate\Http\Request;

use DirectoryApp\Http\Requests;
use DirectoryApp\Http\Controllers\Controller;

use DirectoryApp\Models\Listing;
use DirectoryApp\Models\Category;
use Auth;


class ListingController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $cats = Category::all();
        $subcats = Category::where('parent_id', '>', '0')->get();
        return view('users.listings.index2')
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
        $categories = Category::all();
        return view('users.listings.index2')
            ->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        //$this->validate($request, Listing::$rules);     

        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $logo_name = $logo->getClientOriginalName();
            $logo->move('upload/logo', $logo_name);
        }
            
        // dd($request->input('duallistbox_demo1[]_helper2'));

        $listing = new Listing;
        $listing->name               = $request->input('name');
        $listing->location           = $request->input('location');
       // $listing->division           = $request->input('division');
       // $listing->district           = $request->input('district');
        $listing->phone_number       = $request->input('phone_number');
        $listing->mobile_number      = $request->input('mobile_number');
        $listing->fax                = $request->input('fax');
        $listing->email              = $request->input('email');
        $listing->website            = $request->input('website');
        $listing->establishment_year = $request->input('establishment_year');
        $listing->logo               = $request->hasFile('logo') 
                                       ? $logo_name : '';        
        $listing->manager            = $request->input('manager');
        $listing->employee_number    = $request->input('employee_number');
        $listing->contact_person     = $request->input('contact_person');
        $listing->description        = $request->input('description');
        $listing->saturday           = $request->input('sat_start') . ' - ' .  
                                       $request->input('sat_end');
        $listing->sunday             = $request->input('sun_start') . ' - ' .  
                                       $request->input('sun_end');
        $listing->monday             = $request->input('mon_start') . ' - ' .  
                                       $request->input('mon_end');
        $listing->tuesday            = $request->input('tues_start') . ' - ' .  
                                       $request->input('tues_end');
        $listing->thursday           = $request->input('thurs_start') . ' - ' .  
                                       $request->input('thurs_end'); 
        $listing->friday             = $request->input('fri_start') . ' - ' .  
                                       $request->input('fri_end');  
        
        //$listing->category_id        = $request->input('category');                                     
        $listing->Keyword            = $request->input('keyword');
                                       
        $listing->user_id            = Auth::user()->id;                   

        //return dd($listing);
        if ($listing->save()) {
            $listing->categories()->attach($request->input('category'));
            return dd($listing);
        }
        // else {
        //     // return redirect()
        //     //     ->route('product.index')
        //     //     ->with('warning', 'Category Not created.');              
        // }          

        



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


}
