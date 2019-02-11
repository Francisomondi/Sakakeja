<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\apartment;
use App\house;
use App\User;
use App\room;

class housesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $houses = house::all();
       return view('houses.index')->with('houses', $houses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($apartment_id)

    {
       
     return view('houses.create')->with('apartment_id',$apartment_id);
    }

    /**
     *  Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //get request input
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'category' => 'required',
            'photo' => 'image|nullable|max:1999'
        ]);
            //handle file upload
        if($request->hasFile('photo')){

            //get FileName with extension
            $fileNameWithExt= $request->file('photo')->getClientOriginalName();

            //get just filename
            $filename= pathinfo( $fileNameWithExt, PATHINFO_FILENAME );

            //get just ext
            $extension  = $request->file('photo')->getClientOriginalExtension();

            //filename to store
            $fileNameToStore =$filename.'.'.time().'.'.$extension;

            //upload the image
            $path= $request->file('photo')->storeAs('public/photos/'.$request->input('apartment_id'),$fileNameToStore);

        }else{
            $fileNameToStore = 'noimage.jpg';

        }

        $houses = new house;
        $houses ->title = $request->input('title');
        $houses ->description = $request->input('description');
        $houses ->category = $request->input('category');
        $houses ->price = $request->input('price');
        $houses ->photo = $fileNameToStore;
        $houses ->apartment_id = $request->input('apartment_id');
        $houses ->user_id = auth()->user()->id;
        $houses ->save();

        return redirect('/apartments/'.$request->input('apartment_id'))->with('success', 'image   Created Successfully');
    }

    /**
     * Display the specified resource.
      *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
       

        $houses = house::with('rooms')->find($id); 
      
        return view('houses.show')->with('houses',$houses);
    }
   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $houses = house::with('apartments')->find($id); 
       
        return view('houses.edit')->with('apartments','houses');
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
         $houses = house::find($id);
      
       $houses->delete();

       return redirect('/apartments')->with('success', 'image   deleted Successfully');    
    }
}