<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function checkLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = User::where('email', $request->email)->first();
            session()->put('user', $user);

            return redirect()->route('admin.index');
        }

        return redirect()->back()->with('error', 'Invalid email or password.');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function logOut()
    {

        session()->flush();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\login $login
     * @return \Illuminate\Http\Response
     */
    public
    function user()
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\login $login
     * @return \Illuminate\Http\Response
     */
    public
    function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\login $login
     * @return \Illuminate\Http\Response
     */
    public
    function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\login $login
     * @return \Illuminate\Http\Response
     */
    public
    function destroy()
    {
        //
    }
}
