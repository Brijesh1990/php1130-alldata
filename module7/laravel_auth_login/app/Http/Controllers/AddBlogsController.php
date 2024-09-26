<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\AddBlogs;
class AddBlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('blogs.addblogs');
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
        //validation rules in add subcategory forms
             
            $request->validate([
            'title'=>'required',
            'photo'=>'required',
            'date'=>'required',
            'descriptions'=>'required',
            ]); 
             
            date_default_timezone_set("Asia/Calcutta");
            // uploads products images
            $filename=rand().'.'.$request->photo->extension();
            $request->photo->move(public_path('uploads/blogs'),$filename);
            $data=array(
            'title'=>$request->title,
            'photo'=>$filename,
            'added_date'=>$request->date,
            'descriptions'=>$request->descriptions
            );
            
            // Elequent ORM query builder
            AddBlogs::create($data);
            return redirect('/manageblogs')->with('success','Your Blogs successfully added');
                
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data=AddBlogs::all();
        return view('blogs.manageblogs',['data'=>$data]);
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
