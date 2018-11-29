<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\estate;
use App\company;

class estatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $estates= estate::orderBy('created_at','desc')->paginate(5);
      return view('estates.index')->with('estates', $estates);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($company_id = null)
    {
        return view('estates.create')->with('company_id',$company_id); 
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
            'location' => 'required'
            
        ]);

        $estates = new estate;
        $estates ->name = $request->input('name');
        $estates ->location = $request->input('location');
        $estates ->company_id = $request->input('company_id');
        $estates ->user_id = auth()->user()->id;
        $estates ->save();
 
        return redirect('/estates')->with('success', 'estate Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estates = estate::find($id);
        $estates = estate::where('id',$id)->first();
        return view('estates.show')->with('estates',$estates);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estates = estate::where('id',$id)->first();
        if(auth()->user()->id !== $estates->user_id){
            return redirect('/estates')->with('error','Unauthorized access ');
        }
        return view('estates.edit')->with('estates',$estates);
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
