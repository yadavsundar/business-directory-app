<?php

namespace DirectoryApp\Http\Controllers\Users;

use Illuminate\Http\Request;

use DirectoryApp\Http\Requests;
use DirectoryApp\Http\Controllers\Controller;
use DirectoryApp\Models\Listing;
use DirectoryApp\Models\Employee;
use Auth;


class EmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $employees = Employee::where('user_id', Auth::user()->id)->get();
        return view('users.employees.index')->with('employees', $employees);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


    }


    public function showEmployee($business)
    {
        $employees = Employee::where('listing_id', $business)
                     ->where('user_id', Auth::user()->id)->get();

        $business = Listing::find($business);       

        if (!$employees || !$business) {
            return redirect()->route('user.employee.index');                        
        }   

        return view('users.employees.index')
            ->with('employees', $employees)
            ->with('business', $business);
        
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, Employee::$rules);  
        
        $listing = $request->input('listing_id');

        if ($request->hasFile('employee_pic')) {
            $employee_pic = $request->file('employee_pic');
            $employee_pic_name = $employee_pic->getClientOriginalName();
            $employee_pic->move('upload/' . $listing . '/employee',  $employee_pic_name);
        }
        $employee = new Employee;
        $employee->name = $request->input('name');
        $employee->position = $request->input('position');
        $employee->mail = $request->input('mail');
        $employee->joined = $request->input('joined');
        
        $employee->employee_pic = $request->hasFile('employee_pic') ? $employee_pic_name : '';
        $employee->user_id = Auth::user()->id;
        $employee->listing_id =  $request->input('listing_id');
        $employee->save();

        return redirect()
            ->route('business.employee', ['business' => $listing ])
            ->with('success', 'You have successfully created you employee');
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
        $employee = Employee::find($id);
        if (!$employee || $employee->user_id !== Auth::user()->id ) {
            return redirect()->route('user.employee.index');
        }

        $this->validate($request, Employee::$rules); 

        $listing = $request->input('listing_id');

        if ($request->hasFile('employee_pic')) {
            $employee_pic = $request->file('employee_pic');
            $employee_pic_name = $employee_pic->getClientOriginalName();
            $employee_pic->move('upload/' . $listing . '/employee', $employee_pic_name);
        }        

        $employee->update([
            'name'         => $request->input('name'),
            'position'     => $request->input('position'),
            'mail'         => $request->input('mail'),            
            'joined'       => $request->input('joined'),
            'user_id'      => Auth::user()->id,
            'listing_id'   => $listing,
            'employee_pic' => $request->hasFile('employee_pic') ? 
                              $employee_pic_name : $employee->employee_pic,
        ]);

        return redirect()
            ->route('business.employee', ['business' => $listing ])
            ->with('success', 'You have successfully updated you employee');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::find($id);
        if (!$employee || $employee->user_id !== Auth::user()->id ) {
            return redirect()->route('user.employee.index');
        } 
        $employee->delete();

        return redirect()->route('user.employee.index');

    }
}
