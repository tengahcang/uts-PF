@extends('layouts.app')
@section('halaman')
    <div class="container-sm my-5">
        <div class="row justify-content-center">
            <div class="p-5 bg-light rounded-3 col-xl-4 border">
                <div class="mb-3 text-center">
                    <i class="bi bi-info-circle fs-1"></i>
                    <h4>Detail barang</h4>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="kodebarang" class="form-label">Kode barang</label>
                        <h5>{{ $databarang->kode_barang }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="namabarang" class="form-label">Nama barang</label>
                        <h5>{{ $databarang->nama_barang }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="hargabarang" class="form-label">Harga barang</label>
                        <h5>{{ $databarang->harga_barang }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="deskripsibarang" class="form-label">Deskripsi barang</label>
                        <h5>{{ $databarang->deskripsi_barang }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="unit" class="form-label">Unit</label>
                        <h5>{{ $databarang->unit->nama_satuan }}</h5>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 d-grid">
                        <a class="btn btn-outline-dark btn-lg mt-3" href="{{ route('barang.index') }}"><i class="bi-arrow-left-circle me-2"></i>Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection