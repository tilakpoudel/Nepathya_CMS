<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teachers;
use Session;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.teachers.create');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request,[
            'teacher_name'=>'required',
            'address'=>'required',
            'phoneno'=>'required',
            'email'=>'required',
            'teacher_image'=>'required  | image ',
            
          ]);
  
          $teacher_image = $request->teacher_image;
  
          $teacher_image_new_name = time().$teacher_image->getClientOriginalName();
  
          $teacher_image->move('uploads/teachers',$teacher_image_new_name);
  
          $teacher = Teachers::create([
            'teacher_name'=>$request->teacher_name,
            'address'=>$request->address,
            'phoneno'=>$request->phoneno,
            'email'=>$request->email,
            'image'=>'uploads/posts/'.$teacher_image_new_name,
            'status'=>$request->status,
            
          ]);
        
          
          Session::flash('success','Teachers info  Stored successfully');
  
          //dd($request->all());
          return redirect()->back();
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
