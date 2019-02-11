<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\room;

class roomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $rooms= room::All();
        
        
        return view('rooms.index')->with('rooms', $rooms);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($house_id)
    {
        return view('rooms.create')->with('house_id',$house_id);
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
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|nullable|max:1999'
        ]);
            //handle file upload
        if($request->hasFile('image')){

            //get FileName with extension
            $fileNameWithExt= $request->file('image')->getClientOriginalName();

            //get just filename
            $filename= pathinfo( $fileNameWithExt, PATHINFO_FILENAME );

            //get just ext
            $extension  = $request->file('image')->getClientOriginalExtension();

            //filename to store
            $fileNameToStore =$filename.'.'.time().'.'.$extension;

            //upload the image
            $path= $request->file('image')->storeAs('public/images/'.$request->input('house_id'),$fileNameToStore);

        }else{
            $fileNameToStore = 'noimage.jpg';

        }

        $rooms = new room;
        $rooms ->title = $request->input('title');
        $rooms ->description = $request->input('description'); 
        $rooms ->image = $fileNameToStore;
        $rooms ->house_id = $request->input('house_id');
        $rooms ->user_id = auth()->user()->id;
        $rooms ->save();

        return redirect('/houses/'.$request->input('house_id'))->with('success', 'room   Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rooms = room::where('id',$id)->first();
        return view('rooms.show',compact('rooms',$rooms));
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
        $rooms = room::find($id);
        
        $rooms->delete();
 
        
         return redirect('/houses/{{$house->apartment_id}}')->with('success', 'room   deleted Successfully');
    }
}
