<?php

namespace App\Http\Controllers;

use App\Models\bed_sheets;
use Illuminate\Http\Request;

class BedSheetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bed_sheets= bed_sheets::get();
        return view('admin.bed_sheets.bedSheets',['bed_sheets'=>$bed_sheets]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.bed_sheets.addBedSheets');
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

        bed_sheets::create([
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
     * @param  \App\Models\bed_sheets  $bed_sheets
     * @return \Illuminate\Http\Response
     */
    public function show(bed_sheets $bed_sheets)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\bed_sheets  $bed_sheets
     * @return \Illuminate\Http\Response
     */
    public function edit(bed_sheets $bed_sheets,$id)
    {
        $bed_sheets=bed_sheets::where('id',$id)->first();
        return view('admin.bed_sheets.editBedSheets',['bed_sheets'=>$bed_sheets]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\bed_sheets  $bed_sheets
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, bed_sheets $bed_sheets)
    {
        if ($request->image) {
            bed_sheets::where('id',$request->id)->update([
                'description'=>$request->description,
                'heading'=>$request->heading,
                'price'=>$request->price,
                'image'=>$this->image($request->image),

            ]);
        } else {
           bed_sheets::where('id',$request->id)->update([
                'description'=>$request->description,
                'heading'=>$request->heading,
                'price'=>$request->price,
            ]);
        }


        return redirect()->route('bed.sheets');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\bed_sheets  $bed_sheets
     * @return \Illuminate\Http\Response
     */
    public function destroy(bed_sheets $bed_sheets,$id)
    {
        $bed_sheets=bed_sheets::where('id',$id);
        $bed_sheets->delete();
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
        $path = $image->move('public/upload/bed_sheets/' ,$nameToStore);
        return $nameToStore;

}



}
