<?php

namespace App\Http\Controllers\customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactModel;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('eyecart.contact');
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
         //validation rules in add contacts forms
         $request->validate([
            'Name'=>'required',
            'Email'=>'required|email',
            'Subject'=>'required',
            'Phone'=>'required|digits:10|numeric',
            'Message'=>'required',
               
            ]); 
    
            // insert data in add cotact tables used ORM model (object relational mapping model)
            // Elequent query builders 
            // ModelName::create();  insert into tablename(columname) values('value')
            date_default_timezone_set("Asia/Calcutta");
            $data=array(
                'name'=>$request->Name,
                'email'=>$request->Email,
                'subject'=>$request->Subject,
                'phone'=>$request->Phone,
                'message'=>$request->Message,
                   );
    
            // Elequent ORM query builder
            ContactModel::create($data);
            return redirect('/contact-us')->with('success','Thanks for contact with us we will contact with you soon');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data=ContactModel::all();
        return view('eyecart.admin.managecontacts',["data"=>$data]);
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
