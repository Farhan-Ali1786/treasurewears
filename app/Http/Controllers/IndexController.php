<?php

namespace App\Http\Controllers;

use App\Models\index;
use App\Models\User;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return View('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adduser()
    {
       return view('admin.registration.adduser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function user(Request $request )
    {
        $request->validate([
            'name'=> 'required ',
            'email'=> 'required',
            'password'=> 'required ',

        ]);

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),


        ]);

        return redirect()->back()->with("msg","Stored Successfully")->with("status","success");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\index  $index
     * @return \Illuminate\Http\Response
     */
    public function showuser(index $index)
    {
        $user= User::where('id','!=', Auth::user()->id)->get();
       return view('admin.registration.showUser',['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\index  $index
     * @return \Illuminate\Http\Response
     */
    public function edituser(index $index,$id)
    {
        $user=User::where('id',$id)->first();
        return view('admin.registration.editUser',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\index  $index
     * @return \Illuminate\Http\Response
     */
    public function updateuser(Request $request, index $index)
    {
        User::where('id',$request->id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),


        ]);

        return redirect()->back()->with("msg","Stored Successfully")->with("status","success");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\index  $index
     * @return \Illuminate\Http\Response
     */
    public function destroyuser(index $index,$id)
    {
        $user=User::where('id',$id);
        $user->delete();
        return redirect()->back();
    }
}
