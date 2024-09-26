<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Validator;

class LoginRegisterController extends Controller
{
    //create a member function for register api 
    public function register(Request $request)
    {
        $validate=Validator::make($request->all(),
        [
           'name'=>'required|string|max:255',
           'email'=>'required|email|max:250|unique:users,email',
           'password'=>'required|string|min:5|confirmed',
           'mobile'=>'required|min:10|max:10',
           'pincode'=>'required|min:6|max:6',
           'address'=>'required|string|max:255'     
        ]);

        if($validate->fails())
        {
            return response()->json([
                'status'=>'failed',
                'message'=>'Validations Error',
                'data'=>$validate->errors(),],403);
        
        }

        // data stored in users tables 
        $user=User::create([

            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'mobile'=>$request->mobile,
            'pincode'=>$request->pincode,
            'address'=>$request->address
            
        ]);

        // invoke or take response of register api

        $data['token']=$user->createToken($request->email)->plainTextToken;
        $data['user']=$user;

             $response=[
            'status'=>'success',
            'message'=>'Users successfully created',
            'data'=>$data
            
             ];

             return response()->json($response,200);
    
    }


    // create  a member function for login
    public function login(Request $request)
    {
        $validate=Validator::make($request->all(),
        [
           
           'email'=>'required|string|email',
           'password'=>'required|string'
          
        ]);

        if($validate->fails())
        {
            return response()->json([
                'status'=>'failed',
                'message'=>'Validations Error',
                'data'=>$validate->errors(),],403);
        
        }
        // Manual Login using authentications 
        // check email exist
        $user=User::where('email',$request->email)->first();
        // check password exist
        if(!$user || !Hash::check($request->password,$user->password))
        {
            return response()->json([
                'status'=>'failed',
                'message'=>'Invalid credentials passed please check your email and password'],401);
        }

        // successfully Logged In status

        $data['token']=$user->createToken($request->email)->plainTextToken;
        $data['user']=$user;

             $response=[
            'status'=>'success',
            'message'=>'Users successfully Logged In',
            'data'=>$data
            
             ];

             return response()->json($response,200);
        
    }

    // create a member function for logout api 
    public function logout(Request $request)
    {
        // auth()->user()->tokens->delete();
        auth()->user()->tokens()->delete();
        return response()->json([
            'status'=>'success',
            'message'=>'Users Logout successfully'
        ],200);

    }




}

