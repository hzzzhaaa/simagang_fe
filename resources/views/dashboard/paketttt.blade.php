@extends('layouts.app')
@section('content')

<div class="container">

<div class="container-fluid px-4">
    <div class="row">
        <div class="col-xl-3 col-md-6">
                        <h1 class="mt-4">Paket Program</h1>

                            <div class="card bg-primary text-white mb-4">
                                <a href="/tambahpaket" class="btn btn-primary btn-user btn-block">Tambah Paket</a>
                            </div>
                        </div>
                        </div>

                        <table class="table" id="package">
                            <tr class="table-success bg-white table-striped">
                                <th scope="col">Nama Paket</th>
                                <th scope="col">Kode Seksi Utama</th>
                                <th scope="col">Dosen Pembimbing</th>
                                <th scope="col">Jenis Program</th>
                                <th scope="col">Details</th>
                            </tr>

                            @foreach ($resp as $r)

                            <tr class="table-light ">
                                <td>{{$r->program_id->nama_paket_program}}</td>
                                <td>{{$r->section_id->nama_mk}}</td>
                                <td>{{$r->section_id->dosen}}</td>
                                <td>{{$r->program_id->deskripsi}}</td>
                                <td >
                                    <a class="btn btn-primary" data-toggle="collapse" href="#collapse" role="button" aria-expanded="false" aria-controls="collapseExample">
                                            Details
                                            </a>
                                            <a href="/tambahmk/{$id}" class="btn btn-primary btn-user btn-block">Tambah Mata Kuliah</a>
                                </td>
                            </tr>

                            <tr class="table-light collapse" id="collapse" >
                                                <td colspan="5">
                                                    <table class="table table-condensed">
                                                <thead class="table-info">
                                                    <th scope="col">Kode Mata Kuliah</th>
                                                    <th scope="col">Nama Mata Kuliah</th>
                                                    <th scope="col">sks</th>
                                                    <th scope="col">Dosen</th>
                                                    <th scope="col">lokasi</th>
                                                    <th scope="col">waktu</th>
                                                </thead>
                                                <tbody>
                                                        <tr>
                                                        <td>John</td>
                                                        <td>Doe</td>
                                                        <td>john@example.com</td>
                                                        <td>john@example.com</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tr>
                                @endforeach
                        </table>

                        </div>
                        </div>


                    </div>
</div>

<script>
    // $(document).ready(function () {
    //     console.log('ready');
    //     // api url
    //     const api_url =
    //         "http://localhost:8001/api/packages";
    //     // Defining async function
    //     async function getapi(url) {
    //         // Storing response
    //         const response = await fetch(url);
    //         // Storing data in form of JSON
    //         var data = await response.json();
    //         console.log(data);
    //         if (response) {
    //             hideloader();
    //         }
    //         show(data);
    //     }
    //     // Calling that async function
    //     getapi(api_url);
    //     // Function to hide the loader
    //     function hideloader() {
    //         document.getElementById('loading').style.display = 'none';
    //     }
    //     // Function to define innerHTML for HTML table
    //     function show(data) {
    //         let tab =
    //             ``;
    //         // Loop to access all rows
    //         for (let r of data.data) {
    //             tab += ``;
    //         }
    //         // Setting innerHTML as tab variable
    //         document.getElementById("package").innerHTML = tab;
    //     }
    // });

    var api_url2 =
                "http://localhost:8001/api/mbkm/show3/{{$id}}/";
                api_url2 += r.id;

                // Defining async function
                async function getapi(url) {

                    // Storing response
                    const response = await fetch(url);

                    // Storing data in form of JSON
                    var data = await response.json();
                    console.log(data);
                    if (!response) {
                        console.log('error');
                    }
                    tab += '@if($z<input id ="section_id" type ="section_id" class="form-control" name="section_id" value = "${r.id}" hidden>
                                            <input id="package_id" type="package_id" class="form-control"  name="package_id" value = {{$id}} autocomplete="paket" autofocus hidden>
                                            <button id="submitMatkul" type="submit" class="btn btn-primary" >
                                                Hapus Mata Kuliah
                                            </button>
                                            @else
                                            <input id ="section_id" type ="section_id" class="form-control" name="section_id" value = "${r.id}" hidden>
                                            <input id="package_id" type="package_id" class="form-control"  name="package_id" value = {{$id}} autocomplete="paket" autofocus hidden>
                                            <button id="submitMatkul" type="submit" class="btn btn-primary" >
                                                Tambah Mata Kuliah
                                            </button>
                                            @endif

                                        </form>
                    </td>
                </tr>'

                }
                // Calling that async function
                getapi(api_url2);

</script>

@endsection
