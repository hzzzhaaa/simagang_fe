@extends('layouts.app')
@section('content')

<div class="container">

<div class="container-fluid px-4">
    <div class="row">
        <div class="col-xl-3 col-md-6">
                        <h1 class="mt-4">List Mata Kuliah Aktif</h1>
                        </div>
                        </div>

                        <div class="card-body">
                            <div class="d-flex justify-content-center">
                                <div class="spinner-border"
                                     role="status" id="loading">
                                    <span class="sr-only">Loading...</span>
                                </div>
                            </div>
                        <table class="table" id="section">
                            </table>
                        </div>
                        </div>


                    </div>
</div>

<script>
    $(document).ready(function () {
        console.log('ready');

        // api url
        const api_url =
            "http://localhost:8001/api/sections";

        // Defining async function
        async function getapi(url) {

            // Storing response
            const response = await fetch(url);

            // Storing data in form of JSON
            var data = await response.json();
            if (response) {
                hideloader();
            }
            show(data);
        }
        // Calling that async function
        getapi(api_url);

        // Function to hide the loader
        function hideloader() {
            document.getElementById('loading').style.display = 'none';
        }
        // Function to define innerHTML for HTML table
        function show(data) {
            let tab =
                `<tr class="table-success">
                                    <th scope="col">Kode Mata Kuliah</th>
                                    <th scope="col">Nama Mata Kuliah</th>
                                    <th scope="col">sks</th>
                                    <th scope="col">Dosen</th>
                                    <th scope="col">lokasi</th>
                                    <th scope="col">waktu</th>
                                    <th scope="col">tambah jadwal</th>
                                    </tr>`;

            // Loop to access all rows
            for (let r of data.data) {
                tab += `
                <tr>
                                    <td>${r.kode_mk}</td>
                                    <td>${r.nama_mk}</td>
                                    <td>${r.sks}</td>
                                    <td>${r.dosen}</td>
                                    <td>${r.lokasi}</td>
                                    <td>${r.hari} , ${r.jam}</td>
                                    <td >
                                        <form method="POST" action="{{ route('tambah.matkul.store',["id"=>$id]) }}">
                                        @csrf
                                            <input id ="section_id" type ="section_id" class="form-control" name="section_id" value = "${r.id}" hidden>
                                            <input id="package_id" type="package_id" class="form-control"  name="package_id" value = {{$id}} autocomplete="paket" autofocus hidden>
                                            <button id="submitMatkul" type="submit" class="btn btn-primary" >
                                                Tambah Mata Kuliah
                                            </button>
                                        </form>
                    </td>
                </tr>`;
            }
            // Setting innerHTML as tab variable
            document.getElementById("section").innerHTML = tab;
        }
    });

</script>

@endsection

