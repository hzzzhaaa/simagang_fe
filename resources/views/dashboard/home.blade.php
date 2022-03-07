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
                            <div class="card" id="kotakbiru">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm">
                                               <img src="/img/orang-biru.png" alt="">
                                            </div>
                                            <div class="col">
                                                <img src="/img/VectorBiru.png" id="vektor" >
                                            </div>
                                            <div class="col-sm">
                                                <p id="mhasiswa-total-biru">19.7k</p>
                                                <p id="mhasiswa-biru">Mahasiswa</p>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="card" id="kotakhijau">
                                    <div class="card-body">
                                    <div class="row">
                                            <div class="col-sm">
                                               <img src="/img/orang-hijau.png" alt="">
                                            </div>
                                            <div class="col-sm">
                                                <img src="/img/VectorHijau.png" id="vektor" >
                                            </div>
                                            <div class="col-sm">
                                                <p id="mhasiswa-total-hijau">100</p>
                                                <p id="mhasiswa-hijau">Admin Prodi</p>
                                            </div>
                                        </div>

                                    </div>
                            </div>
                        </div>
                        </div>


                    </div>
</div>
@endsection
