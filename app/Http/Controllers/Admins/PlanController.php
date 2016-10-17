<?php

namespace DirectoryApp\Http\Controllers\Admins;

use Illuminate\Http\Request;

use DirectoryApp\Http\Requests;
use DirectoryApp\Http\Controllers\Controller;
use DirectoryApp\Models\Plan;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plans = Plan::all();
        return view('admins.plan.index')
            ->with('plans', $plans);
            
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
            'name'     => 'required|min:2,max:40|unique:plans',
            'business' => 'required',
            'category' => 'required',
            'keyword'  => 'required',
            'photo'    => 'required',
            'price'    => 'required',
            'duration' => 'required',

        ];      

        $this->validate($request, $rules);        

        $plan              = new Plan();            
        $plan->name        = $request->input('name');
        $plan->slug        = str_slug($request->input('name'));
        $plan->business    = $request->input('business');
        $plan->category    = $request->input('category');
        $plan->keyword     = $request->input('keyword');
        $plan->photo       = $request->input('photo');
        $plan->price       = $request->input('price'); 
        $plan->duration    = $request->input('duration');    

        
        if ($plan->save()) {
            return redirect()
                ->route('control.plan.index')
                ->with('success', 'Plan created successfully.');                
        } else {
            return redirect()
                ->route('control.plan.index')
                ->with('warning', 'Plan Not created.');              
        } 
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
        $plan = Plan::find($id);
        if (!$plan) {
            return redirect()
                ->route('control.plan.index')
                ->with('warning', 'Plan Not found.'); 
        }
        
        $plans = Plan::all();
        return view('admins.plan.edit')
            ->with('plan', $plan)
            ->with('plans', $plans); 
    
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

        $plan = Plan::find($id);
        if (!$plan) {
            return redirect()
                ->route('control.plan.index')
                ->with('warning', 'Plan Not found.'); 
        }        

        $rules = [
            'name'     => 'required|min:2,max:40',
            'business' => 'required',
            'category'     => 'required',
            'keyword'  => 'required',
            'photo'    => 'required',
            'price'    => 'required',
            'duration' => 'required',

        ];      

        $this->validate($request, $rules);


        $plan->update([
            'name'    => $request->input('name'),
            'slug'    => str_slug($request->input('name')),
            'business'=> $request->input('business'),
            'category'=> $request->input('category'),
            'keyword' => $request->input('keyword'),
            'photo'   => $request->input('photo'),
            'price'   => $request->input('price'),
            'duration'=> $request->input('duration')
        ]);

        
        return redirect()
            ->route('control.plan.index')
            ->with('success', 'Plan updated successfully.');                 
                 
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $plan = Plan::find($id);
        if (!$plan) {
            return redirect()
                ->route('control.plan.index')
                ->with('warning', 'Plan Not found.'); 
        }
        $plan->delete();
        return redirect()
            ->route('control.plan.index')
            ->with('success', 'Plan deleted successfully.');        

    }

    public function delete($id)
    {
        $plan = Plan::find($id);
        if (!$plan) {
            return redirect()
                ->route('control.plan.index')
                ->with('warning', 'Plan Not found.'); 
        }

        $plans = Plan::all();        
        return view('admins.plan.delete')
            ->with('plan', $plan)
            ->with('plans', $plans);
            
    }    
}
