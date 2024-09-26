<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\AddProducts;
use DB;


class AddProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category=DB::table('categories')->select('id','categoryname')->get();
        $subcategory=DB::table('subcategories')->select('id','subcategoryname')->get(); 
        return view('eyecart.admin.addproducts',['category'=>$category,"subcategory"=>$subcategory]);
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
    'categoryname'=>'required',
    'subcategoryname'=>'required',
    'productimg'=>'required',
    'productname'=>'required',
    'oldprice'=>'required',
    'newprice'=>'required',
    'qty'=>'required',
    'descriptions'=>'required'    
    ]); 
    
    // insert data in products tables used ORM model (object relational mapping model)
    // Elequent query builders 
    // ModelName::create();  insert into tablename(columname) values('value')
    date_default_timezone_set("Asia/Calcutta");
    // uploads products images
    $filename=rand().'.'.$request->productimg->extension();
    $request->productimg->move(public_path('uploads/products'),$filename);
    $data=array(
    'category_id'=>$request->categoryname,
    'subcategory_id'=>$request->subcategoryname,
    'photo'=>$filename,
    'productname'=>$request->productname,
    'oldprice'=>$request->oldprice,
    'newprice'=>$request->newprice,
    'qty'=>$request->qty,
    'descriptions'=>$request->descriptions
    );
    
    // Elequent ORM query builder
    AddProducts::create($data);
    //return view('eyecart.admin.addsubcategory');
    return redirect('/admin-login/add-products')->with('success','Your Products successfully added');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //join category and subcategory in products tables
$product=DB::table('products')
->join('categories','categories.id', '=','products.category_id')
->join('subcategories','subcategories.id', '=','products.subcategory_id')
->select('products.*','categories.categoryname','subcategories.subcategoryname')
->get();
return view('eyecart.admin.manageproducts',['product'=>$product]);
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
