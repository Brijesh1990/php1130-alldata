<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\AddCategoryModel;

class AddCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('eyecart.admin.addcategory');
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
        //validation rules in add category forms
        $request->validate([
        'categoryname'=>'required',
        'categorydescriptions'=>'required'    
        ]); 

        // insert data in add category tables used ORM model (object relational mapping model)
        // Elequent query builders 
        // ModelName::create();  insert into tablename(columname) values('value')
        date_default_timezone_set("Asia/Calcutta");
        $data=array(
            'categoryname'=>$request->categoryname,
            'categorydescriptions'=>$request->categorydescriptions
        );

        // Elequent ORM query builder
        AddCategoryModel::create($data);
        //return view('eyecart.admin.addcategory');
        return redirect('/admin-login/add-category')->with('success','Your Category successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // Elequent Query ORM model
        $data=AddCategoryModel::all();
        return view('eyecart.admin.managecategory',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //create a Elequent query builder for edit category data
        $editcategory=AddCategoryModel::where('id',$id)->first();
        return view('eyecart.admin.editcategory',['editcategory'=>$editcategory]);
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
        //create  a Elequent query builder ORM model for update 
        $data=array(
            'categoryname'=>$request->categoryname,
            'categorydescriptions'=>$request->categorydescriptions
        );

        AddCategoryModel::where('id',$id)->update($data);
        return redirect('/admin-login/manage-category')->with('upd','Your data successfully updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // write query builder ORM model
        AddCategoryModel::where('id',$id)->delete();
        return redirect('/admin-login/manage-category')->with('del','Data successfully deleted');
    }
}
