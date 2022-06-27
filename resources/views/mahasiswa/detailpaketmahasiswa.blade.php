@extends('layouts.app')
@section('content')

<div class="container">

<div class="container-fluid px-4">
    <div class="row">
        <div class="col-xl-3 col-md-6">
                        <h1 class="mt-4">List Mata Kuliah Aktif</h1>
                        <h3 class="mt-4">{{$resp->nama_paket_program}}</h3>
                        <div class="card bg-primary text-white mb-4">
                            <form method="POST" action="{{ route('store') }}">
                                @csrf
                                <input id ="nama" type ="nama" class="form-control" name="nama" value = "{{session('nama')}}" hidden>
                                <input id ="nim" type ="nim" class="form-control" name="nim" value = "{{session('username')}}" hidden>
                                <input id="package_id" type="package_id" class="form-control"  name="package_id" value = {{$id}} autocomplete="paket" autofocus hidden>
                                <button id="submitMatkul" type="submit" class="btn btn-primary" >
                                    Pilih Paket Program
                                </button>
                            </form>
                        </div>
        </div>
    </div>

                        <div class="card-body">
                        <table class="table" id="section">
                            <tr class="table-success">
                                <th scope="col">Kode Mata Kuliah</th>
                                <th scope="col">Nama Mata Kuliah</th>
                                <th scope="col">sks</th>
                                <th scope="col">Dosen</th>
                                <th scope="col">lokasi</th>
                                <th scope="col">waktu</th>
                            </tr>
                            @foreach ($data as $matkul)
                            <tr>
                                <td>{{$matkul->kode_mk}}</td>
                                <td>{{$matkul->nama_mk}}</td>
                                <td>{{$matkul->sks}}</td>
                                <td>{{$matkul->dosen}}</td>
                                <td>{{$matkul->lokasi}}</td>
                                <td>{{$matkul->jam}}</td>
                            </tr>
                            @endforeach
                        </table>

                        </div>
</div>


                    </div>
</div>

<script>
</script>

@endsection
