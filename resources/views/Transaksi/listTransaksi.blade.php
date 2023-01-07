@extends('layouts.Sidebar')

@section('content')
    <section class="content" style="padding-top: 15px">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header bg-info">
                            <h3 class="card-title">List Transaksi</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="datatable" class="table table-head-fixed text-nowrap table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Resep Obat</th>
                                        <th>Nama Pasien</th>
                                        <th>Tanggal Payment</th>
                                        <th>Total Harga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($payment as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->resep->obat->nama_obat }} - {{ $item->resep->keterangan_resep }}</td>
                                            <td>{{ $item->resep->pasien->nama_pasien }}</td>
                                            <td>{{ $item->tanggal_payment }}</td>
                                            <td>{{ $item->total_harga }}</td>
                                        </tr>
                                    @endforeach
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

    <script type="text/javascript">
        $(function() {
            $("#datatable").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
    </script>
@endsection
