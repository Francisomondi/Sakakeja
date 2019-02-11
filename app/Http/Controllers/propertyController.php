<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\property;

class propertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = property::orderBy('created_at','desc')->paginate(3);
        return view('properties.index')->with('properties',$properties);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('properties.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=> 'required', 
            'description'=> 'required', 
            'price'=> 'required', 
           
            'dimentions'=> 'required', 
            'condition'=> 'required', 
            'category'=> 'required', 
            'image'=> 'image|nullable|max:1999'

        ]);

        //handle file upload
        if($request->hasFile('image')){

            //get file name ith extension
            $fileNameWithExt= $request->file('image')->getClientOriginalName();

            //get just file name
            $filename =pathInfo( $fileNameWithExt, PATHINFO_FILENAME);

            //Get just Ext
            $extension = $request->file('image')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore =$filename.'_'.time().'.'.$extension;

            //Upload image
            $path = $request->file('image')->storeAs('public/photos/property',$fileNameToStore);

        }else{
            $fileNameToStore = 'noimage.jpg';
        }

        //create property
        $properties = new  property;
        $properties->name = $request->input('name');
        $properties->description = $request->input('description');
        $properties->price = $request->input('price');
        
        $properties->dimentions = $request->input('dimentions');
        $properties->condition = $request->input('condition');
        $properties->category = $request->input('category');
        $properties ->user_id = auth()->user()->id;
        $properties->image = $fileNameToStore;
        $properties->save();

        return redirect('/properties')->with('success','property Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $properties= property::find($id);
        return view('properties.show')->with('properties',$properties);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $properties= property::find($id);
        return view('properties.edit')->with('properties',$properties);
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
        $this->validate($request,[
            'name'=> 'required', 
            'description'=> 'required', 
            'price'=> 'required', 
            
            'dimentions'=> 'required', 
            'condition'=> 'required', 
            'category'=> 'required', 
            'image'=> 'image|nullable|max:1999'

        ]);

        //handle file upload
        if($request->hasFile('image')){

            //get file name ith extension
            $fileNameWithExt= $request->file('image')->getClientOriginalName();

            //get just file name
            $filename =pathInfo( $fileNameWithExt, PATHINFO_FILENAME);

            //Get just Ext
            $extension = $request->file('image')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore =$filename.'_'.time().'.'.$extension;

            //Upload image
            $path = $request->file('image')->storeAs('public/photos/property',$fileNameToStore);

        }else{
            $fileNameToStore = 'noimage.jpg';
        }

        //create bar stool
        $properties =property::find($id);
        $properties->name = $request->input('name');
        $properties->description = $request->input('description');
        $properties->price = $request->input('price');
        
        $properties->dimentions = $request->input('dimentions');
        $properties->condition = $request->input('condition');
        $properties->category = $request->input('category');
        $properties ->user_id = auth()->user()->id;
        $properties->image = $fileNameToStore;
        $properties->save();

        return redirect('/properties')->with('success','properties updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $properties = property::find($id);
        
        $properties->delete();
 
        return redirect('/properties')->with('success', 'property   deleted Successfully'); 
    }
}
