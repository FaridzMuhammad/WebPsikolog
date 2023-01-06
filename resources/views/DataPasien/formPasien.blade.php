@extends('layouts.Sidebar')

@section('content')
    <section class="content" style="padding-top: 20px">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Formulir pasien</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                    <div class="card-body">

                        <div class="form-group" data-select2-id="29">
                            <label>Nama Pasien</label>
                            <select class="form-control select2 select2-hidden-accessible" style="width: 100%;"
                                data-select2-id="1" tabindex="-1" aria-hidden="true">
                                <option selected="selected" data-select2-id="3">Dokter</option>
                                <option data-select2-id="34">Pasien</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Email</label>
                            <input type="password" class="form-control" id="exampleInputPassword1"
                                placeholder="Masukan Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nomor Telepon</label>
                            <input type="password" class="form-control" id="exampleInputPassword1"
                                placeholder="Masukan Nomer Hp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Alamat</label>
                            <textarea class="form-control" rows="3" placeholder="Masukan Alamat"></textarea>
                        </div>
                        <!-- /.card-body -->
                        <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </section>
@endsection
