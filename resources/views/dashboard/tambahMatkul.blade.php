@extends('layouts.app')
@section('content')

<div class="container">

<div class="container-fluid px-4">
    <div class="row">
        <div class="col-xl-3 col-md-6">
                        <h1 class="mt-4">List Mata Kuliah Aktif</h1>
                        </div>
                        </div>
                        <table class="table" id="section">
                            <tr class="table-success">
                                <th scope="col">Kode Mata Kuliah</th>
                                <th scope="col">Nama Mata Kuliah</th>
                                <th scope="col">sks</th>
                                <th scope="col">Dosen</th>
                                <th scope="col">lokasi</th>
                                <th scope="col">waktu</th>
                                <th scope="col">tambah jadwal</th>
                            </tr>
                            @foreach ($resp as $matkul)
                            <tr>
                                <td>{{$matkul->kode_mk}}</td>
                                <td>{{$matkul->nama_mk}}</td>
                                <td>{{$matkul->sks}}</td>
                                <td>{{$matkul->dosen}}</td>
                                <td>{{$matkul->lokasi}}</td>
                                <td>{{$matkul->jam}}</td>
                                <td>
                                    <form method="POST" action="{{ route('tambah.matkul.store',["id"=>$id]) }}">
                                    @csrf
                                        <input id ="section_id" type ="section_id" class="form-control" name="section_id" value = "{{$matkul->id}}" hidden>
                                        <input id="package_id" type="package_id" class="form-control"  name="package_id" value = {{$id}} autocomplete="paket" autofocus hidden>
                                        <button id="submitMatkul" type="submit" class="btn btn-primary" >
                                            Tambah Mata Kuliah
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </table>
                        </div>
                        </div>


                    </div>
</div>

<script>
    $(document).ready(function(){
        let api_url = "http://localhost:8001/api/mbkm/show3/{{$id}}/"
        
    });

</script>


@endsection
