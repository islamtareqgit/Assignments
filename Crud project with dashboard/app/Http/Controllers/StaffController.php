<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Staff::latest()->where('trash', 0)->get();

        return view('admin.staff.index',[

          'all_data' => $data

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.staff.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
       if($request-> hasFile('photo')){

       $img = $request->file('photo');
       $file_name = $this-> uniqueName( $img);
       $img-> move(public_path('media/staff/'), $file_name);

       
       }
       
        Staff::create([

      'name'  => $request-> name,
      'email'  => $request-> email,
      'cell'  => $request-> cell,
      'location'  => $request-> location,
      'gender'  => $request-> gender,
      'photo'  => $file_name



       ]);

       return redirect()-> route('staff.index')->with('success', 'staff added successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Staff::find($id);

        return view('admin.staff.show',[


            'all_data' => $data

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit(Staff $staff)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Staff $staff)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Staff::find($id);
        $data-> delete();
        return redirect()-> route('staff.index')-> with('Data delete permanently');

    }
/**
 * Trash system
 */
    public function trash($id)
    {
       $data = Staff::find($id);
       if($data->trash ==false){

          $data->trash = true;
          $msg = $data -> name. 'send to trash successful';
       }else{

        $data->trash = false;
        $msg = $data -> name. 'send restore successful';
       }
       $data -> update();
       return redirect()-> route('staff.index')-> with('success',$msg);

    }


    /**trash data show */

    public function trashData()
    {
        
        $data = Staff::latest()->where('trash', 1)->get();
        return view('admin.staff.trash',[


            "all_trash_data"  => $data
        ]);
    }
}
