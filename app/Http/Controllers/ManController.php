<?php

namespace App\Http\Controllers;

use App\Models\man;
use Illuminate\Http\Request;

class ManController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $man=man::get();
        return view('admin.man.man',['man'=>$man]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.man.addman');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'heading'=> 'required ',
            'price'=> 'required',
            'image'=> 'required ',

        ]);

        man::create([
            'description'=>$request->description,
            'heading'=>$request->heading,
            'price'=>$request->price,
            'image'=>$this->image($request->image),
        ]);

        return redirect()->back()->with("msg","Stored Successfully")->with("status","success");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\man  $man
     * @return \Illuminate\Http\Response
     */
    public function show(man $man)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\man  $man
     * @return \Illuminate\Http\Response
     */
    public function edit(man $man, $id)
    {
        $man=man::where('id',$id)->first();
        return view('admin.man.editman',['man'=>$man]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\man  $man
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, man $man)
    {
        if ($request->image) {
            man::where('id',$request->id)->update([
                'description'=>$request->description,
                'heading'=>$request->heading,
                'price'=>$request->price,
                'image'=>$this->image($request->image),

            ]);
        } else {
           man::where('id',$request->id)->update([
                'description'=>$request->description,
                'heading'=>$request->heading,
                'price'=>$request->price,
            ]);
        }
        return redirect()->route('admin.man');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\man  $man
     * @return \Illuminate\Http\Response
     */
    public function destroy(man $man,$id)
    {
        $man=man::where('id',$id);
        $man->delete();
        return redirect()->back()->with("msg","Deleted Successfully")->with("status","danger");
    }



    function image($image){

        $filenameWithExt = $image->getClientOriginalName();
        //get just filename
        $filename = pathinfo($filenameWithExt);

        //get just extension
        $extension = $image->extension();
        $nameToStore = $filename['filename'] . "_".time().".".$extension;
        //Move to folder
        $path = $image->move('public/upload/man_cloths/' ,$nameToStore);
        return $nameToStore;

}



}
