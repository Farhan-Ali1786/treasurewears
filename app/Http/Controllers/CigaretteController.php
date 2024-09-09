<?php

namespace App\Http\Controllers;

use App\Models\Cigarette;
use Illuminate\Http\Request;

class CigaretteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cigarette= Cigarette::get();
        return view('admin.cigarette.show',['cigarette'=>$cigarette]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cigarette.add');
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

        Cigarette::create([
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
     * @param  \App\Models\Cigarette  $cigarette
     * @return \Illuminate\Http\Response
     */
    public function show(Cigarette $cigarette)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cigarette  $cigarette
     * @return \Illuminate\Http\Response
     */
    public function edit(Cigarette $Cigarette,$id)
    {
        $Cigarette=Cigarette::where('id',$id)->first();
        return view('admin.cigarette.adit',['Cigarette'=>$Cigarette]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cigarette  $cigarette
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cigarette $cigarette)
    {
        if ($request->image) {
            Cigarette::where('id',$request->id)->update([
                'description'=>$request->description,
                'heading'=>$request->heading,
                'price'=>$request->price,
                'image'=>$this->image($request->image),

            ]);
        } else {
           Cigarette::where('id',$request->id)->update([
                'description'=>$request->description,
                'heading'=>$request->heading,
                'price'=>$request->price,
            ]);
        }


        return redirect()->route('admin.cigarette');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cigarette  $cigarette
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cigarette $Cigarette,$id)
    {
        $Cigarette=Cigarette::where('id',$id);
        $Cigarette->delete();
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
        $path = $image->move('public/upload/Cigarette/' ,$nameToStore);
        return $nameToStore;

}
}
