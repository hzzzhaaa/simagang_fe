<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mahasiswa/mahasiswa');
    }

    public function paketAktif($nim)
    {
        $response = Http::get("http://localhost:8001/api/student/show/$nim");
        

    }

    public function detailPaket($id)
    {
        $respon = Http::get("http://localhost:8001/api/packages/$id");
        $resp = json_decode($respon);
        // dd($resp);

        $response = Http::get("http://localhost:8001/api/mbkms/$id");
        $data = json_decode($response);
        // $data = $data->data;
        // dd($data);

        return view('mahasiswa/detailpaketmahasiswa',['id'=>$id , 'data'=>$data, 'resp'=>$resp['0']]);
    }
    public function pilihPaket()
    {
        return view('mahasiswa/pilihpaket');
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
        $package = $request->package_id;
        $nama = $request->nama;
        $nim = $request->nim;

        $response = Http::asForm()->post("http://localhost:8001/api/student/store",[
            'package_id'=>$package,
            'nim'=>$nim,
            'nama_mahasiswa'=>$nama
        ]);

        $resp = json_decode($response);
        if($response->status() == 500){
            return response()->json(['error'=>'Internal Server Error'], 500);
        }else if($response == null || $response->status() == 400){
            return response()->json(['error'=>'Unauthorized'],401);
        }
        return Redirect::back();
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
