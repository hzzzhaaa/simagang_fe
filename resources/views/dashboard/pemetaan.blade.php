@extends('layouts.app')
@section('content')
<div class="container">

<div class="container-fluid px-4">
                        <h1 class="mt-4">Pemetaan Semester</h1>
                        <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <!-- <div class="card bg-primary text-white mb-4">
                                <button class="btn btn-primary btn-user btn-block">Tambah Semester</button>
                            </div> -->
                        </div>
                        </div>
                      <br>
                        <div class="card" style="border-radius: 20px;">
                        <!-- <div class="card-header">
                           Dashboard
                        </div> -->
                        <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr class="table-success">
                                    <th scope="col">Nama Paket</th>
                                    <th scope="col">Kode Seksi Utama</th>
                                    <th scope="col">Dosen Pembimbing</th>
                                    <th scope="col">Jenis Program</th>
                                    <th scope="col">Details</th>
                                    </tr>
                                        </thead>
                                            <tbody>
                                            <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>
                                            <a class="btn btn-primary" data-toggle="collapse" href="#collapse1" role="button" aria-expanded="false" aria-controls="collapseExample">
                                               Details
                                            </a>
                                            </td>
                                            <tr class="collapse" id="collapse1" >
                                                <td colspan="5">

                                                    <table class="table table-condensed">
                                                    <thead class="table-info">
                                                        <tr>
                                                        <th>Firstname</th>
                                                        <th>Lastname</th>
                                                        <th>Email</th>
                                                        <th>Email</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                        <td>John</td>
                                                        <td>Doe</td>
                                                        <td>john@example.com</td>
                                                        <td>john@example.com</td>
                                                        </tr>
                                                        <tr>
                                                        <td>Mary</td>
                                                        <td>Moe</td>
                                                        <td>mary@example.com</td>
                                                        <td>john@example.com</td>
                                                        </tr>
                                                        <tr>
                                                        <td>July</td>
                                                        <td>Dooley</td>
                                                        <td>july@example.com</td>
                                                        <td>john@example.com</td>
                                                        </tr>
                                                    </tbody>
                                                    </table>
                                                </td>
                                                </tr>
                                            </tr>
                                            <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>
                                                @fat
                                            </td>
                                            <td>
                                            <a class="btn btn-primary" data-toggle="collapse" href="#collapse2" role="button" aria-expanded="false" aria-controls="collapseExample">
                                               Details
                                            </a>
                                            </td>

                                            <tr class="collapse" id="collapse2" >
                                                <td colspan="5">
                                                    <table class="table table-condensed">
                                                    <thead class="table-info">
                                                        <tr>
                                                        <th>Firstname</th>
                                                        <th>Lastname</th>
                                                        <th>Email</th>
                                                        <th>Email</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                        <td>John</td>
                                                        <td>Doe</td>
                                                        <td>john@example.com</td>
                                                        <td>john@example.com</td>
                                                        </tr>
                                                        <tr>
                                                        <td>Mary</td>
                                                        <td>Moe</td>
                                                        <td>mary@example.com</td>
                                                        <td>john@example.com</td>
                                                        </tr>
                                                        <tr>
                                                        <td>July</td>
                                                        <td>Dooley</td>
                                                        <td>july@example.com</td>
                                                        <td>john@example.com</td>
                                                        </tr>
                                                    </tbody>
                                                    </table>
                                                </td>
                                                </tr>
                                            </tr>
                                            <tr>
                                            <th scope="row">3</th>
                                            <td>Devid</td>
                                            <td>@twitter</td>
                                            <td>Thornton</td>
                                            <td>
                                            <a class="btn btn-primary" data-toggle="collapse" href="#collapse3" role="button" aria-expanded="false" aria-controls="collapseExample">
                                               Details
                                            </a>
                                            </td>
                                            <tr class="collapse" id="collapse3" >
                                                <td colspan="5">
                                                    <table class="table table-condensed">
                                                    <thead class="table-info">
                                                        <tr>
                                                        <th>Firstname</th>
                                                        <th>Lastname</th>
                                                        <th>Email</th>
                                                        <th>Email</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                        <td>John</td>
                                                        <td>Doe</td>
                                                        <td>john@example.com</td>
                                                        <td>john@example.com</td>
                                                        </tr>
                                                        <tr>
                                                        <td>Mary</td>
                                                        <td>Moe</td>
                                                        <td>mary@example.com</td>
                                                        <td>john@example.com</td>
                                                        </tr>
                                                        <tr>
                                                        <td>July</td>
                                                        <td>Dooley</td>
                                                        <td>july@example.com</td>
                                                        <td>john@example.com</td>
                                                        </tr>
                                                    </tbody>
                                                    </table>
                                                </td>
                                                </tr>
                                            </tr>
                                            </tbody>
                         </table>
                        </div>
                        </div>


                    </div>
</div>
@endsection
