<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Packet;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

class PacketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard/paket');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard/tambahpaket');
    }


    public function detailPaket($id)
    {
        $response = Http::get("http://localhost:8001/api/packages/$id");
        $data = json_decode($response);
        // dd($data['0']);

        return view('dashboard/detailpaket',['id'=>$id , 'data'=>$data['0']]);
    }

    public function tambahmatakuliah($id)
    {
        //get data matkul semua
        $response = Http::get("http://localhost:8001/api/sections");
        $resp = json_decode($response);
        $resp = $resp->data;
        // dd($resp);

        foreach ($resp as $r)
        {
            // dd($r);
            //get data matkul yang udah diambil
            $respon = Http::get("http://localhost:8001/api/mbkm/show3/$id/$r->id");
            $hasil[]= json_decode($respon);

        }
        return view('dashboard/tambahMatkul', ['id'=>$id , 'resp'=>$resp, 'hasil'=>$hasil]);
    }

    public function tambahmatakuliahstore(Request $request)
    {
        $section = $request->section_id;
        $package = $request->package_id;

        $response = Http::asForm()->post("http://localhost:8001/api/mbkms",[
            'package_id'=>$package,
            'section_id'=>$section,

        ]);

        $resp = json_decode($response);
        if($response->status() == 500){
            return response()->json(['error'=>'Internal Server Error'], 500);
        }else if($response == null || $response->status() == 400){
            return response()->json(['error'=>'Unauthorized'],401);
        }
        return Redirect::back();
    }

    // public function viewmatakuliah($id)
    // {
    //     $response = Http::get("http://localhost:8001/api/mbkms/$id");
    //     $resp = json_decode($response);
    //     if($response->status() == 500){
    //         return response()->json(['error'=>'Internal Server Error'], 500);
    //     }else if($response == null || $response->status() == 400){
    //         return response()->json(['error'=>'Unauthorized'],401);
    //     }

    // }
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
