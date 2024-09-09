<?php

namespace App\Http\Controllers;

use App\Models\sportswears;
use Illuminate\Http\Request;

class SportswearsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('admin.sportswears.sportswears');
        $sportswears= sportswears::get();
        return view('admin.sportswears.sportswears',['sportswears'=>$sportswears]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sportswears.add_sportswears');
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

        sportswears::create([
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
     * @param  \App\Models\sportswears  $sportswears
     * @return \Illuminate\Http\Response
     */
    public function show(sportswears $sportswears)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sportswears  $sportswears
     * @return \Illuminate\Http\Response
     */
    public function edit(sportswears $sportswears, $id)
    {
        $sportswears=sportswears::where('id',$id)->first();
        return view('admin.sportswears.edit_sportswears',['sportswears'=>$sportswears]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sportswears  $sportswears
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sportswears $sportswears)
    {
        if ($request->image) {
            sportswears::where('id',$request->id)->update([
                'description'=>$request->description,
                'heading'=>$request->heading,
                'price'=>$request->price,
                'image'=>$this->image($request->image),

            ]);
        } else {
           sportswears::where('id',$request->id)->update([
                'description'=>$request->description,
                'heading'=>$request->heading,
                'price'=>$request->price,
            ]);
        }


        return redirect()->route('admin.sports.wears');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sportswears  $sportswears
     * @return \Illuminate\Http\Response
     */
    public function destroy(sportswears $sportswears, $id)
    {
        $sportswears=sportswears::where('id',$id);
        $sportswears->delete();
        return redirect()->back()->with("msg","Deleted Successfully")->with("status","primary");
    }


    function image($image){

        $filenameWithExt = $image->getClientOriginalName();
        //get just filename
        $filename = pathinfo($filenameWithExt);

        //get just extension
        $extension = $image->extension();
        $nameToStore = $filename['filename'] . "_".time().".".$extension;
        //Move to folder
        $path = $image->move('public/upload/sportswears/' ,$nameToStore);
        return $nameToStore;

}
}
