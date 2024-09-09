<?php

namespace App\Http\Controllers;

use App\Models\handi_craft;
use Illuminate\Http\Request;

class HandiCraftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Respons e
     */
    public function index()
    {
        $handi_craft = handi_craft::get();
       return view('admin.handiCraft.handiCraft',['handi_craft'=>$handi_craft]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.handiCraft.addHandiCraft');
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

        handi_craft::create([
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
     * @param  \App\Models\handi_craft  $handi_craft
     * @return \Illuminate\Http\Response
     */
    public function show(handi_craft $handi_craft)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\handi_craft  $handi_craft
     * @return \Illuminate\Http\Response
     */
    public function edit(handi_craft $handi_craft,$id)
    {
        $handi_craft=handi_craft::where('id',$id)->first();
        return view('admin.handiCraft.editHandiCraft',['handi_craft'=>$handi_craft]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\handi_craft  $handi_craft
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, handi_craft $handi_craft)
    {
        if ($request->image) {
            handi_craft::where('id',$request->id)->update([
                'description'=>$request->description,
                'heading'=>$request->heading,
                'price'=>$request->price,
                'image'=>$this->image($request->image),

            ]);
        } else {
           handi_craft::where('id',$request->id)->update([
                'description'=>$request->description,
                'heading'=>$request->heading,
                'price'=>$request->price,
            ]);
        }

        return redirect()->route('show.handi.craft');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\handi_craft  $handi_craft
     * @return \Illuminate\Http\Response
     */
    public function destroy(handi_craft $handi_craft,$id)
    {
        $handi_craft=handi_craft::where('id',$id);
        $handi_craft->delete();
        return redirect()->back();
    }

    function image($image){

        $filenameWithExt = $image->getClientOriginalName();
        //get just filename
        $filename = pathinfo($filenameWithExt);

        //get just extension
        $extension = $image->extension();
        $nameToStore = $filename['filename'] . "_".time().".".$extension;
        //Move to folder
        $path = $image->move('public/upload/handi_craft/' ,$nameToStore);
        return $nameToStore;

}



}
