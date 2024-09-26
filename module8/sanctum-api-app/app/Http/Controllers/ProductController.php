<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     $products=Product::latest()->get();
     return response()->json([

        'status'=>'success',
        'message'=>'Products is retrieved successfully',
        'data'=>$products,
       
    ],200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate=Validator::make($request->all(),
        [
           'name'=>'required|string|max:255',
           'price'=>'required',
           'qty'=>'required',
           'descriptions'=>'required'     
        ]);

        if($validate->fails())
        {
            return response()->json([
                'status'=>'failed',
                'message'=>'Validations Error',
                'data'=>$validate->errors(),],403);
        
        }

        // data stored in products tables 
        $products=Product::create([

            'name'=>$request->name,
            'price'=>$request->price,
            'qty'=>$request->qty,
            'descriptions'=>$request->descriptions          
        ]);

        //products addedd in products tables
             $response=[
            'status'=>'success',
            'message'=>'Products successfully Added',
            'data'=>$products
            
             ];

             return response()->json($response,200);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // orm query builder 
        $products=Product::find($id);
        return response()->json([

            'status'=>'success',
            'message'=>'Products is retrieved successfully',
            'data'=>$products,
           
        ],200);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validate=Validator::make($request->all(),
        [
           'name'=>'required|string|max:255',
           'price'=>'required',
           'qty'=>'required',
           'descriptions'=>'required'     
        ]);

        if($validate->fails())
        {
            return response()->json([
                'status'=>'failed',
                'message'=>'Validations Error',
                'data'=>$validate->errors(),],403);
        
        }
        // update product from products tables 

        $products=Product::find($id);

      if(is_null($products))
        {
            return response()->json([
                'status'=>'failed',
                'message'=>'Products is not found'
            ],404);
        }

        $products->update($request->all());
        return response()->json([

            'status'=>'success',
            'message'=>'Products is Updated successfully',
            'data'=>$products
           
        ],200);
        


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $products=Product::find($id);
        if(is_null($products))
        {
            return response()->json([
                'status'=>'failed',
                'message'=>'Products is not found'
            ],404);
        }

        // products deleted query 
        Product::destroy($id);
        return response()->json([

            'status'=>'success',
            'message'=>'Products is Deleted successfully'
           
        ],200);
        
    }


    // create a member functions for search products via its name

    public function search($name)
    {
        $products=Product::where('name','like','%'.$name.'%')->get();
        if(is_null($products->first()))
        {
            return response()->json([
                'status'=>'failed',
                'message'=>'Products is not found'
            ],404);
        }
        return response()->json([

            'status'=>'success',
            'message'=>'Products is searched successfully',
            'data'=>$products

           
        ],200);



    }
}
