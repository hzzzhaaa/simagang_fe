@extends('layouts.app')

@section('content')

<div class="container">

<div class="container-fluid px-4">
                        <div class="card" style="border-radius: 20px; width: 1070px;height: 511px;">
                        <!-- <div class="card-header">
                           Dashboard
                        </div> -->
                        <div class="card-body">
                        <table class="table table-bordered border-primary">
                            <thead class="table-dark">
                                <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Kegiatan</th>
                                <th scope="col">Periode</th>
                                <th scope="col">Status</th>
                                <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th scope="row">1</th>
                                <td>Asistensi Mengajar di Satuan Pendidikan</td>
                                <td>Magang/Praktek Kerja</td>
                                <td>Aktif</td>
                                <td >
                                    <a href="#"><img src="/img/edit.png" alt="edit"></a>
                                    <a href="#"><img src="/img/search.png" alt="cari"></a>
                                    <a href="#"><img src="/img/delete.png" alt="hapus"></a>
                                </td>
                                </tr>
                                <tr>
                                <th scope="row">2</th>
                                <td>11 November 2021 -12 Desember 2021</td>
                                <td>11 November 2021 -12 Desember 2021</td>
                                <td>Aktif</td>
                                <td>
                                    <a href="#"><img src="/img/edit.png" alt="edit"></a>
                                    <a href="#"><img src="/img/search.png" alt="cari"></a>
                                    <a href="#"><img src="/img/delete.png" alt="hapus"></a>
                                </td>
                                </tr>

                            </tbody>
                        </table>
                        </div>
                        </div>


                    </div>
</div>
@endsection
