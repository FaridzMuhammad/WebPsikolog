@extends('layouts.Sidebar')

@section('content')
    <section class="content" style="padding-top: 20px">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header bg-info">
                            <h3 class="card-title">Fixed Header Table</h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right"
                                        placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0" style="height: 300px;">
                            <table class="table table-head-fixed text-nowrap">
                                <thead>
                                    <tr>
                                        <th>Nama Pasien</th>
                                        <th>Tanggal</th>
                                        <th>Dokumen</th>
                                        <th>Keterangan Diagnosa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>183</td>
                                        <td>John Doe</td>
                                        <td>11-7-2014</td>
                                        <td><span class="tag tag-success">Approved</span></td>
                                    </tr>
                                    <tr>
                                        <td>219</td>
                                        <td>Alexander Pierce</td>
                                        <td>11-7-2014</td>
                                        <td><span class="tag tag-warning">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <td>657</td>
                                        <td>Bob Doe</td>
                                        <td>11-7-2014</td>
                                        <td><span class="tag tag-primary">Approved</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
@endsection
