@extends('layouts.app')
@section('content')

<div class="container">

<div class="container-fluid px-4">

                        <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <h1 class="mt-4">List Semester</h1>
                        </div>
                        </div>

                        <div class="card-body">
                            <div class="d-flex justify-content-center">
                                <div class="spinner-border"
                                     role="status" id="loading">
                                    <span class="sr-only">Loading...</span>
                                </div>
                            </div>
                            <div class="row"id="semester">

                            </div>
                        </div>
                        </div>


                    </div>
</div>

<script>
    $(document).ready(function () {
        console.log('ready');

        // api url
        const api_url =
            "http://localhost:8001/api/semesters";

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
            let col = '';
            // Loop to access all rows
            for (let r of data.data) {
                col += `
                <div class="col" >
                <div class="card" id="kotak" >
                                        <div class="card-body">
                                        <p>Semester ${r.nama_semester}</p>`
                                        if (r.status == "aktif"){
                                        col +=`<div class="highlightijo"> ${r.status}</div>
                                        <i class="fas fa-calendar-alt"></i>
                                        ${r.periode}
                                        <br>
                                        </div>
                                    </div></div>`}else{
                                        col +=`<div class="highlightkuning"> ${r.status}</div>
                                        <i class="fas fa-calendar-alt"></i>
                                        ${r.periode}
                                        <br>
                                        </div>
                                    </div></div>`
                                    };
            }

            // Setting innerHTML as tab variable
            document.getElementById("semester").innerHTML = col;
        }
    });

</script>

@endsection
