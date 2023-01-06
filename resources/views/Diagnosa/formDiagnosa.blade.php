@extends('layouts.Sidebar')

@section('content')
    <section class="content" style="padding-top: 20px">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Quick Example</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>

                    <div class="card-body">

                        <div class="form-group" data-select2-id="29">
                            <label>Nama Pasien</label>
                            <select class="form-control select2 select2-hidden-accessible" style="width: 100%;"
                                data-select2-id="1" tabindex="-1" aria-hidden="true">
                                <option selected="selected" data-select2-id="3">Alabama</option>
                                <option data-select2-id="34">Alaska</option>
                                <option data-select2-id="35">California</option>
                                <option data-select2-id="36">Delaware</option>
                                <option data-select2-id="37">Tennessee</option>
                                <option data-select2-id="38">Texas</option>
                                <option data-select2-id="39">Washington</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Dokter</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Sesi</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Tanggal</label>
                            <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Deskripsi</label>
                            <textarea class="form-control" rows="3" placeholder="Masukan Alamat"></textarea>
                        </div>

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
