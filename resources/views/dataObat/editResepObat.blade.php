@extends('layouts.Sidebar')

@section('content')

    <section class="content" style="padding-top: 20px">
        <div class="container-fluid">
            @if (session('success_message'))
                <div class="alert alert-success">
                    {{ session('success_message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Resep Obat</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('resep.update', $resep->id) }}", method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group" data-select2-id="29">
                            <label>Obat</label>
                            <select name="obat" class="form-control select2 select2-hidden-accessible"
                                style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                @foreach ($meds as $item)
                                    <option {{ $resep->id_obat == $item->id ? 'selected' : '' }} value="{{ $item->id }}">{{ $item->nama_obat }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group" data-select2-id="29">
                            <label>Pasien</label>
                            <select name="pasien" class="form-control select2 select2-hidden-accessible"
                                style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                @foreach ($patients as $item)
                                    <option {{ $resep->id_pasien == $item->id ? 'selected' : '' }} value="{{ $item->id }}">{{ $item->nama_pasien }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Keterangan</label>
                            <textarea name="keterangan" class="form-control" rows="3" placeholder="Deskripsi...">{{ $resep->keterangan_resep }}</textarea>
                        </div>

                        <!-- /.card-body -->
                        <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </section>

@endsection
