@extends('layouts.app')
@section('halaman')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row mb-0">
                    <div class="col-lg-9 col-xl-10">
                        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                    </div>
                    <div class="col-lg-3 col-xl-2">
                        <div class="d-grid gap-2">
                            <a class="btn btn-primary" href="{{ route('barang.create') }}"><i class="bi bi-file-earmark-plus"></i> Create</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Kode_Barang</th>
                                <th>Nama_Barang</th>
                                <th>Harga_Barang</th>
                                <th>Deskripsi_Barang</th>
                                <th>Satuan_Barang</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Kode_Barang</th>
                                <th>Nama_Barang</th>
                                <th>Harga_Barang</th>
                                <th>Deskripsi_Barang</th>
                                <th>Satuan_Barang</th>
                                <th></th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($listbarang as $barang)
                                <tr>
                                    <td>{{ $barang->kode_barang }}</td>
                                    <td>{{ $barang->nama_barang }}</td>
                                    <td>{{ $barang->harga_barang }}</td>
                                    <td>{{ $barang->deskripsi_barang }}</td>
                                    <td>{{ $barang->unit->kode_satuan.' - '.$barang->unit->nama_satuan }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('barang.show', ['barang' => $barang->id]) }}" class="btn btn-info btn-circle btn-sm me-2"><i class="bi bi-info-circle"></i></a>
                                            <a href="{{ route('barang.edit', ['barang' => $barang->id]) }}" class="btn btn-warning btn-circle btn-sm me-2"><i class="bi bi-wrench-adjustable"></i></a>
                                            <div>
                                                <form action="{{ route('barang.destroy', ['barang' => $barang->id]) }}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger btn-circle btn-sm me-2"><i class="bi-trash3-fill"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <script src="resources/js/jquery.dataTables.min.js"></script>

@endsection