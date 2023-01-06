@extends('layouts.Sidebar')

@section('content')

    <section class="content" style="padding-top: 20px">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Resep Obat</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Resep</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nama Obat</label>
                            <input type="password" class="form-control" id="exampleInputPassword1"
                                placeholder="Masukan Email">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Sesi</label>
                            <input type="password" class="form-control" id="exampleInputPassword1"
                                placeholder="Masukan Email">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Keterangan</label>
                            <textarea class="form-control" rows="3" placeholder="Masukan Alamat"></textarea>
                        </div>

                        <!-- /.card-body -->
                        <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </section>

@endsection
