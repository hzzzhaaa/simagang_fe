@extends('layouts.app')
@section('content')

<div class="container">

<div class="container-fluid px-4">
                        <div class="card" style="border-radius: 20px; width: 1070px;height: 511px;">
                        <!-- <div class="card-header">
                           Dashboard
                        </div> -->
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                            <h1 class="mt-4">Paket Program</h1>

                                                <div class="card bg-primary text-white mb-4">
                                                    <a href="/tambahpaket" class="btn btn-primary btn-user btn-block">Tambah Paket</a>
                                        </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-center">
                                <div class="spinner-border"
                                     role="status" id="loading">
                                    <span class="sr-only">Loading...</span>
                                </div>
                            </div>
                        <table class="table table-bordered border-primary" id="program">
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
            "http://localhost:8001/api/programs";

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
                `<tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Kegiatan</th>
                                <th scope="col">status mbkm</th>
                                <th scope="col">deskripsi</th>
                                <th scope="col">Aksi</th>
                </tr>`;

            // Loop to access all rows
            for (let r of data.data) {
                tab += `
            <tr>
                                <th scope="row">1</th>
                                <td>${r.nama_program}</td>
                                <td>${r.status_mbkm}</td>
                                <td>${r.deskripsi}</td>
                                <td >
                                    <a href="#"><img src="/img/edit.png" alt="edit"></a>
                                    <a href="#"><img src="/img/search.png" alt="cari"></a>
                                    <a href="#"><img src="/img/delete.png" alt="hapus"></a>
                </td>
            </tr>`;
            }

            // Setting innerHTML as tab variable
            document.getElementById("program").innerHTML = tab;
        }
    });

</script>

@endsection
