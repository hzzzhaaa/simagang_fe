<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
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

    public function login(Request $request)
    {
        $username = $request->username;
        $password = $request->password;

        $response = Http::asForm()->post("http://localhost:8001/api/auth/login",[
            'username'=>$username,
            'password'=>$password
        ]);

        $resp = json_decode($response);
        if($response->status() == 500){
            return response()->json(['error'=>'Internal Server Error'], 500);
        }else if($response == null || $response->status() == 400){
            return response()->json(['error'=>'Unauthorized'],401);
        }

        $me = Http::get("http://localhost:8001/api/auth/me?token=".$resp->access_token);
        $user = json_decode($me);
        if($user->role==1){
            // Auth::login($user);
            $request->session()->put("nama", $user->nama);
            $request->session()->put("username", $user->username);
            $request->session()->put("role", $user->role);

            $request->session()->regenerate();
            $resp = $request->session()->all();

            return redirect("/home");
        }else{
            return redirect("/");
        }

    }

    public function logout(Request $request)
    {

        $request->session()->invalidate();

        return redirect('/');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
