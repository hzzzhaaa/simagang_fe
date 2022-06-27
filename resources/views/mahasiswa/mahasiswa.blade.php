@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container-fluid px-4"style="font-family: Poppins;">
                        <h1 class="mt-4">Dashboard</h1>

                        <div class="card" style="border-radius: 20px;">
                            <div class="card-body">

                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            {{ __('Selamat Datang :') }}   {{session('nama')}} {{ __('Di Sistem Informasi Magang UNJ') }}
                            </div>
                        </div>
                      <br>
                    <div class="card" style="border-radius: 20px; width: 1070px;height: 511px;">
                        <div class="card-body">
                            <h4 class="mt-4">Paket Program Aktif</h4>
                            <br>
                            <div class="d-flex justify-content-center">
                                <div class="spinner-border"
                                    role="status" id="loading">
                                <span class="sr-only">Loading...</span>
                                </div>
                            </div>
                            <table class="table" id="package">
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
            "http://localhost:8001/api/student/show/{{session('username')}}";
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
                `<tr class="table-success bg-white table-striped">
                                    <th scope="col">Nama Paket</th>
                                    <th scope="col">Kode Seksi Utama</th>
                                    <th scope="col">Dosen Pembimbing</th>
                                    <th scope="col">Jenis Program</th>
                                    <th scope="col">Details</th>
                                    </tr>`;
            // Loop to access all rows
            for (let r of data.data) {
                tab += `
            <tr class="table-light ">
                <td>${r.nama_paket_program}</td>
                <td>${r.program_id.nama_program}</td>
                <td>${r.section_id.dosen}</td>
                <td>${r.program_id.status_mbkm}</td>
                <td>
                    <a class="btn btn-primary" href="/paket/${r.id}" btn-user btn-block>
                        Details
                    </a>
                </td>
            </tr>`;
            }
            // Setting innerHTML as tab variable
            document.getElementById("package").innerHTML = tab;
        }
    });
</script>


@endsection
