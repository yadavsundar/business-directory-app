<?php

namespace DirectoryApp\Http\Controllers\Users;

use Illuminate\Http\Request;

use DirectoryApp\Http\Requests;
use DirectoryApp\Http\Controllers\Controller;
use DirectoryApp\Models\Listing;
use DirectoryApp\Models\Gallery;
use Auth;


class GalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $galleries = Gallery::where('user_id', Auth::user()->id)->get();
        return view('users.galleries.index')->with('galleries', $galleries);
    }

    public function showGallrey($business)
    {

        $galleries = Gallery::where('listing_id', $business)
                     ->where('user_id', Auth::user()->id)->get();

        $business = Listing::find($business);       

        if (!$galleries || !$business) {
            return redirect()->route('user.gallery.index');                        
        }                     
                
        
        return view('users.galleries.index')
            ->with('galleries', $galleries);
        
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
            'title'       => 'required',
            'gallery_pic' => 'required|mimes:jpeg,png'
        ];

        $this->validate($request, $rules);  
        $listing = Listing::where('user_id', Auth::user()->id)->first();  

        if ($request->hasFile('gallery_pic')) {
            $gallery_pic = $request->file('gallery_pic');
            $gallery_pic_name = $gallery_pic->getClientOriginalName();
            $gallery_pic->move('upload/' . $listing->id . '/gallery',  $gallery_pic_name);
        }
        $gallery = new Gallery;
        $gallery->title = $request->input('title');
        $gallery->gallery_pic = $gallery_pic_name;
        $gallery->user_id = Auth::user()->id;
        $gallery->listing_id =  $listing->id;
        $gallery->save();

        return redirect()
            ->route('user.gallery.index')
            ->with('success', 'You have successfully uploaded picture in your gallery');        
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
        $gallery = Gallery::find($id);
        if (!$gallery || $gallery->user_id !== Auth::user()->id ) {
            return redirect()->route('user.gallery.index');
        }

        $rules = [
            'title'       => 'required',
            'gallery_pic' => 'mimes:jpeg,png'
        ];

        $this->validate($request, $rules);  
        $listing = Listing::where('user_id', Auth::user()->id)->first();  

        if ($request->hasFile('gallery_pic')) {
            $gallery_pic = $request->file('gallery_pic');
            $gallery_pic_name = $gallery_pic->getClientOriginalName();
            $gallery_pic->move('upload/' . $listing->name . '/gallery',  $gallery_pic_name);
        }     

        $gallery->update([
            'title'       => $request->input('title'),            
            'gallery_pic' => $request->hasFile('gallery_pic') ? $gallery_pic_name : 
                             $gallery->gallery_pic,
            'user_id'     => Auth::user()->id,
            //'listing_id'  => Auth::user()->id,
        ]);

        return redirect()->route('user.gallery.index');               
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::find($id);
        if (!$gallery || $gallery->user_id !== Auth::user()->id ) {
            return redirect()->route('user.gallery.index');
        } 
        $gallery->delete();

        return redirect()->route('user.gallery.index');        
    }
}
