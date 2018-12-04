<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\apartment;
use App\house;

class apartmentsController extends Controller
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
        $apartments= apartment::All();
        
        return view('apartments.index')->with('apartments', $apartments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('apartments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //get request input
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'estate' => 'required',
            'category' => 'required',
            'cover_image' => 'image|nullable|max:1999'
        ]);
            //handle file upload
        if($request->hasFile('cover_image')){

            //get FileName with extension
            $fileNameWithExt= $request->file('cover_image')->getClientOriginalName();

            //get just filename
            $filename= pathinfo( $fileNameWithExt, PATHINFO_FILENAME );

            //get just ext
            $extension  = $request->file('cover_image')->getClientOriginalExtension();

            //filename to store
            $fileNameToStore =$filename.'.'.time().'.'.$extension;

            //upload the image
            $path= $request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);

        }else{
            $fileNameToStore = 'noimage.jpg';

        }

        $apartments = new apartment;
        $apartments ->name = $request->input('name');
        $apartments ->description = $request->input('description');
        $apartments ->estate = $request->input('estate');
        $apartments ->price = $request->input('price');
        $apartments ->category = $request->input('category');
        $apartments ->cover_image = $fileNameToStore;
        $apartments ->user_id = auth()->user()->id;
        $apartments ->save();

        return redirect('/apartments')->with('success', 'apartment   Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
        $apartments = apartment::where('id',$id)->first();
        $houses = house::where('apartment_id',$id)->get();
        return view('apartments.show',compact('apartments','houses'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */ 
    public function edit($id)
    {
        $apartments = apartment::where('id',$id)->first();
        $houses = house::where('apartment_id',$id)->get();
        return view('apartments.edit',compact('apartments','houses'));
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
          //get request input
          $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'estate' => 'required',
            'category' => 'required',
            'cover_image' => 'image|nullable|max:1999'
        ]);
            //handle file upload
        if($request->hasFile('cover_image')){

            //get FileName with extension
            $fileNameWithExt= $request->file('cover_image')->getClientOriginalName();

            //get just filename
            $filename= pathinfo( $fileNameWithExt, PATHINFO_FILENAME );

            //get just ext
            $extension  = $request->file('cover_image')->getClientOriginalExtension();

            //filename to store
            $fileNameToStore =$filename.'.'.time().'.'.$extension;

            //upload the image
            $path= $request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);

        }else{
            $fileNameToStore = 'noimage.jpg';

        }

        $apartments = apartment::find($id);
        $apartments ->name = $request->input('name');
        $apartments ->description = $request->input('description');
        $apartments ->estate = $request->input('estate');
        $apartments ->price = $request->input('price');
        $apartments ->category = $request->input('category');
        $apartments ->cover_image = $fileNameToStore;
        $apartments ->user_id = auth()->user()->id;
        $apartments ->save();

        return redirect('/apartments')->with('success', 'apartment   updated Successfully');
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
