<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\AddSubcategoryModel;
use DB;

class AddSubcategoryController extends Controller
{
/**
 * Display a listing of the resource.
 *
 * @return \Illuminate\Http\Response
 */
public function index()
{
$category=DB::table('categories')->select('id','categoryname')->get();
return view('eyecart.admin.addsubcategory',['category'=>$category]);
}

/**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
public function create()
{


}

public function showall()
{

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
'categoryname'=>'required',
'subcategoryname'=>'required',
'subcategorydescriptions'=>'required'    
]); 

// insert data in add subcategory tables used ORM model (object relational mapping model)
// Elequent query builders 
// ModelName::create();  insert into tablename(columname) values('value')
date_default_timezone_set("Asia/Calcutta");
$data=array(
'category_id'=>$request->categoryname,
'subcategoryname'=>$request->subcategoryname,
'subcategorydescriptions'=>$request->subcategorydescriptions
);

// Elequent ORM query builder
AddSubcategoryModel::create($data);
//return view('eyecart.admin.addsubcategory');
return redirect('/admin-login/add-subcategory')->with('success','Your subCategory successfully added');
}

/**
 * Display the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function show()
{
// Elequent Query ORM Builder model for join tables 
// $data=AddSubcategoryModel::all();
// //dd($data); for printing any query to show in views
// return view('eyecart.admin.managesubcategory',['data'=>$data]);

//join category in subcategory to display categoryname used DB
$subcategory=DB::table('subcategories')
->join('categories','categories.id', '=','subcategories.category_id')
->select('subcategories.*','categories.categoryname')
->get();
return view('eyecart.admin.managesubcategory',['subcategory'=>$subcategory]);

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
