<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\company;

class companiesController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except'=> ['show','index']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $companies= company::orderBy('created_at','desc')->paginate(5);
        return view('companies.index')->with('companies', $companies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companies.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);

        $companies = new company;
        $companies ->name = $request->input('name');
        $companies ->description = $request->input('description');
        $companies ->email = $request->input('email');
        $companies ->phone = $request->input('phone');
        $companies ->user_id = auth()->user()->id;
        $companies ->save();

        return redirect('/companies')->with('success', 'Company Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */ 
    public function show($id)
    {
        $companies = company::find($id);
        $companies = company::where('id',$id)->first();
        return view('companies.show')->with('companies',$companies);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $companies = company::where('id',$id)->first();
        if(auth()->user()->id !== $companies->user_id){
            return redirect('/companies')->with('error','Unauthorized access ');
        }
        return view('companies.edit')->with('companies',$companies);
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
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);

        $companies = company::find($id);
        $companies ->name = $request->input('name');
        $companies ->description = $request->input('description');
        $companies ->email = $request->input('email');
        $companies ->phone = $request->input('phone');
        $companies ->save();

        return redirect('/companies')->with('success', 'Company updated Successfully');
    }

    /** 
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $companies = company::find($id);
       if(auth()->user()->id !== $companies->user_id){
        return redirect('/companies')->with('error','Unauthorized aceess ');
    }
       $companies->delete();

       return redirect('/companies')->with('success', 'Company deleted Successfully');

    }
}
 