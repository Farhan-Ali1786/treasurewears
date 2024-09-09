<?php

namespace App\Http\Controllers;

use App\Models\bed_sheets;
use App\Models\Cigarette;
use App\Models\front;
use App\Models\handi_craft;
use App\Models\man;
use App\Models\order;
use App\Models\sportswears;
use App\Models\woman;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $woman = woman::get();
        $man = man::get();
        $handi_craft = handi_craft::get();
        $bed_sheets = bed_sheets::get();
        $sportswears = sportswears::get();
        return view('front.index', [
            'woman' => $woman,
            'man' => $man,
            'handi_craft' => $handi_craft,
            'bed_sheets' => $bed_sheets,
            'sportswears' => $sportswears
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cigaretteProductView(Request $request)
    {
    //    return $cigarette = Cigarette::get();
        $id = $request->id;
        $Cigarette = Cigarette::where('id', $id)->first();

        return view('front.cigaretteproductview', compact('Cigarette'));
    }



    public function womanProductView(Request $request)
    {
        $id = $request->id;
        $woman = woman::where('id', $id)->first();

        return view('front.womanProductView', compact('woman'));
    }

    public function manProductView(Request $request)
    {
        $id = $request->id;
        $man = man::where('id', $id)->first();

        return view('front.manProductView', compact('man'));
    }
    public function handiProductView(Request $request)
    {
        $id = $request->id;
        $handi_craft = handi_craft::where('id', $id)->first();

        return view('front.handiProductView', compact('handi_craft'));
    }
    public function bedProductView(Request $request)
    {
        $id = $request->id;
        $bed_sheets = bed_sheets::where('id', $id)->first();

        return view('front.bedProductView', compact('bed_sheets'));
    }
    public function sportswears(Request $request)
    {
        $id = $request->id;
        $sportswears = sportswears::where('id', $id)->first();

        return view('front.sportswears', compact('sportswears'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function order(Request $request)
    {


        // return 'dfd';
        order::create([
            'name' => $request->name,
            'last_name' => $request->last_name,
            'whatsapp_number' => $request->whatsapp_number,
            'phone' => $request->phone,
            'address' => $request->address,
            'cnic' => $request->cnic,
            'image' => $this->image($request->image),
        ]);

        return redirect()->back()->with("msg", "Your Order Send Successfully")->with("status", "success");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\front  $front
     * @return \Illuminate\Http\Response
     */
    function image($image)
    {

        $filenameWithExt = $image->getClientOriginalName();
        //get just filename
        $filename = pathinfo($filenameWithExt);

        //get just extension
        $extension = $image->extension();
        $nameToStore = $filename['filename'] . "_" . time() . "." . $extension;
        //Move to folder
        $path = $image->move('public/upload/order/', $nameToStore);
        return $nameToStore;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\front  $front
     * @return \Illuminate\Http\Response
     */
    public function show(front $front)
    {
        $order = order::get();
        return view('admin.order.order', ['order' => $order]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\front  $front
     * @return \Illuminate\Http\Response
     */
    public function womanDetails(Request $request, front $front)
    {
        $woman = woman::get();
        return view('front.allPages.woman', ['woman' => $woman]);
    }
    public function manDetails(Request $request, front $front)
    {
        $man = man::get();
        return view('front.allPages.man', ['man' => $man]);
    }
    public function Cosmetics(Request $request, front $front)
    {
        $Cosmetics = handi_craft::get();
        return view('front.allPages.handi_craft', ['Cosmetics' => $Cosmetics]);
    }
    public function bedDetails(Request $request, front $front)
    {
        $bed_sheets = bed_sheets::get();
        return view('front.allPages.bed_sheets', ['bed_sheets' => $bed_sheets]);
    }
    public function sportswears_details(Request $request, front $front)
    {
        $sportswears = sportswears::get();
        return view('front.allPages.sportswears', ['sportswears' => $sportswears]);
    }
    public function Cigarettedetails(Request $request, front $front)
    {
        $Cigarette = Cigarette::get();
        return view('front.allPages.Cigarette', ['Cigarette' => $Cigarette]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\front  $front
     * @return \Illuminate\Http\Response
     */
    public function Contact(front $front)
    {
        return view('front.contact');
    }
}
