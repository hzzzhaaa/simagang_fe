@extends('layouts.app')
@section('content')

<div class="container">

<div class="container-fluid px-4">
    <div class="row">
        <div class="col-xl-3 col-md-6">
                        <h1 class="mt-4">List Mata Kuliah Aktif</h1>
                        <h3 class="mt-4">{{$data->nama_paket_program}}</h3>
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
            "http://localhost:8001/api/mbkms/{{$id}}";

        // Defining async function
        async function getapi(url) {

            // Storing response
            const response = await fetch(url);

            // Storing data in form of JSON
            var data = await response.json();
            console.log(data);
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
                </tr>`;

            // Loop to access all rows
            for (let r of data) {
                tab += `
                <tr>
                    <td>${r.kode_mk}</td>
                    <td>${r.nama_mk}</td>
                    <td>${r.sks}</td>
                    <td>${r.dosen}</td>
                    <td>${r.lokasi}</td>
                    <td>${r.hari} , ${r.jam}</td>
                </tr>`;

            }
            // Setting innerHTML as tab variable
            document.getElementById("section").innerHTML = tab;
        }
    });

</script>

@endsection
