<?php

namespace App\Http\Controllers;

use App\Models\order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function order(order $order)
    {
        $order= order::get();
        return view('admin.order.order',['order'=>$order]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(order $order, $id)
    {
        $order=order::where('id',$id)->first();
        return view('admin.order.editorder',['order'=>$order]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, order $order)
    {
        if ($request->image) {
            order::where('id',$request->id)->update([
                'name'=>$request->name,
                'last_name'=>$request->last_name,
                'whatsapp_number'=>$request->whatsapp_number,
                'phone'=>$request->phone,
                'address'=>$request->address,
                'cnic'=>$request->cnic,
                'mark'=>$request->mark,
                'image'=>$this->image($request->image),

            ]);
        } else {
           order::where('id',$request->id)->update([
            'name'=>$request->name,
            'last_name'=>$request->last_name,
            'whatsapp_number'=>$request->whatsapp_number,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'cnic'=>$request->cnic,
            'mark'=>$request->mark,
            ]);
        }
       

        return redirect()->route('admin.order');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(order $order, $id)
    {
        $order=order::where('id',$id);
        $order->delete();
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
        $path = $image->move('public/upload/order/' ,$nameToStore);
        return $nameToStore;

}
}
