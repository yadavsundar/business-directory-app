<?php

namespace DirectoryApp\Http\Controllers\Users;

use Illuminate\Http\Request;

use DirectoryApp\Http\Requests;
use DirectoryApp\Http\Controllers\Controller;
use DirectoryApp\Models\Listing;
use DirectoryApp\Models\Review;
use Auth;

class ReviewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $reviews = Review::all();
        return view('users.reviews.index')->with('reviews', $reviews);
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
            'body' => 'required',            
        ];

        $this->validate($request, $rules); 

        // $listing = Listing::where('user_id', Auth::user()->id)->first();  

        $Review = new Review;
        $Review->body = $request->input('body');
        $Review->rating = $request->input('rating');
        $Review->user_id = Auth::user()->id;
        // $Review->listing_id =  $listing->id;
        $Review->save();

        return redirect()
            ->route('user.review.index')
            ->with('success', 'You have successfully reviewed the company');        
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
        $review = Review::find($id);
        if (!$review || $review->user_id !== Auth::user()->id ) {
            return redirect()->route('user.review.index');
        }

        $rules = [
            'body'       => 'required',
        ];

        $this->validate($request, $rules);  
        // $listing = Listing::where('user_id', Auth::user()->id)->first();  

        $review->update([
            'body'   => $request->input('body'),            
            'review' => $request->input('review'),            
            'user_id'=> Auth::user()->id,
            //'listing_id'  => Auth::user()->id,
        ]);

        return redirect()->route('user.review.index');               
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $review = Review::find($id);
        if (!$review || $review->user_id !== Auth::user()->id ) {
            return redirect()->route('user.review.index');
        } 
        $review->delete();

        return redirect()->route('user.review.index');        
    }
}
