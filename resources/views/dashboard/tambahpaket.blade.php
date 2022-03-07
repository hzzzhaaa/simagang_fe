@extends('layouts.app')

@section('content')
<div class="container">

    <div class="container-fluid px-4">
        <h1 class="mt-4">Tambah Paket</h1>
        <div class="row">
        </div>
        <br>
        <div class="card" style="border-radius: 20px;">
            <div class="card-body">
                <form method="post">
                    @csrf

                    <div class="form-group row">
                        <label for="program_id" class="col-md-4 col-form-label text-md-right">Program MBKM</label>

                        <div class="col-md-6">
                            <select class="form-control" id="program_id" name="program_id">
                                <option value="" selected="selected" disabled>Pilih Program
                                </option>
                                <option value="2">Praktek Kerja Lapangan/Magang</option>
                                <option value="1">Asistensi  Mengajar di Satuan Pendidikan</option>
                            </select>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-md-4 col-form-label text-md-right">Nama Paket Program</label>

                        <div class="col-md-6">
                            <input id="nama" type="name" class="form-control"  name="nama"  autocomplete="paket" autofocus>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jadwal" class="col-md-4 col-form-label text-md-right">Jadwal Aktif Utama</label>

                        <div class="col-md-6">
                            <select class="form-control" id="jadwal" name="jadwal">
                                <option value="" selected="selected" disabled>Pilih Jadwal
                                </option>
                                <option value="1">Praktek Kerja Lapangan</option>
                                <option value="2">Asistensi Mengajar</option>
                            </select>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="semester" class="col-md-4 col-form-label text-md-right">Semester Aktif</label>

                        <div class="col-md-6">
                            <select class="form-control" id="semester" name="semester">
                                <option value="" selected="selected" disabled>Pilih Semester
                                </option>
                                <option value="1">Semester 116</option>
                            </select>

                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button id="postTambahPaket" type="submit" class="btn btn-primary">
                                Submit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


    </div>
</div>

<script>
    // document.querySelector('#postTambahPaket').addEventListener("click", onClick);
    //Select input values with the data you want to send
    // let program_id = document.getElementById('program_id').value;
    // let nama = document.getElementById('nama').value;
    // let jadwal = document.getElementById('jadwal').value;
    // let semester = document.getElementById('semester').value;



    $(document).ready(function () {
        console.log('ready');


        $('#postTambahPaket').click(function (event) {
            event.preventDefault();
            console.log('clicked');
            let program_id = document.getElementById('program_id').value;
            let nama = document.getElementById('nama').value;
            let jadwal = document.getElementById('jadwal').value;
            let semester = document.getElementById('semester').value;
            console.log({nama,jadwal,semester,program_id});
            fetch("http://localhost:8001/api/packages",
            {
                headers:{
                    "Content-Type": "application/json",
                    "Accept": "application/json, text-plain, */*",
                    "X-Requested-With": "XMLHttpRequest"
                },
                method: 'post',
                credentials: "same-origin",
                body: JSON.stringify({
                    program_id : program_id,
                    nama_paket_program : nama,
                    section_id :jadwal,
                    semester_id : semester
                })
            })
            .then((data) => {
                Swal.fire({
                    title: 'Success',
                    icon: 'success'
                }).then((result) => {
                    window.location.href = '/paket'
                })
                    // redirect = "/paket"
                    // window.location.href = redirect;
                    console.log(data);
                })
            .catch((error) => {
                Swal.fire({
                    title: 'Error',
                    icon: 'error'
                })
                console.log(error);
            })
        });

    });
</script>

@endsection
