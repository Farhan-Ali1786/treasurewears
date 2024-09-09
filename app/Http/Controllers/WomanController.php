<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\woman;
use Illuminate\Http\Request;

class WomanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $woman=woman::get();
        return view('admin.woman.woman',['woman'=>$woman]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.woman.add');
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

        woman::create([
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
     * @param  \App\Models\woman  $woman
     * @return \Illuminate\Http\Response
     */
    public function show(woman $woman)
    {
        return view('admin.woman.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\woman  $woman
     * @return \Illuminate\Http\Response
     */
    public function edit(woman $woman, $id)
    {
        $woman=woman::where('id',$id)->first();
        return view('admin.woman.editwoman',['woman'=>$woman]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\woman  $woman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, woman $woman)
    {




        // woman::where('id',$request->id)->update([
        //     'description'=>$request->description,
        //     'heading'=>$request->heading,
        //     'price'=>$request->price,
        //     'image'=>$this->image($request->image),
        // ]);

        if ($request->image) {
            woman::where('id',$request->id)->update([
                'description'=>$request->description,
                'heading'=>$request->heading,
                'price'=>$request->price,
                'image'=>$this->image($request->image),
       
            ]);
        } else {
           woman::where('id',$request->id)->update([
                'description'=>$request->description,
                'heading'=>$request->heading,
                'price'=>$request->price,
            ]);
        }

        return redirect()->route('admin.woman');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\woman  $woman
     * @return \Illuminate\Http\Response
     */
    public function destroy($id )
    {
        $woman=woman::where('id',$id);
        $woman->delete();
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
        $path = $image->move('public/upload/woman_cloths/' ,$nameToStore);
        return $nameToStore;

}
}
