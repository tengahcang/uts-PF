@extends('layouts.app')
@section('halaman')
    <div class="container-sm mt-5">
        <form action="{{ route('unit.store') }}" method="POST">
            @csrf
            <div class="row justify-content-center">
                <div class="p-5 bg-light rounded-3 border col-xl-6">
                    <div class="mb-3 text-center">
                        <i class="bi bi-file-earmark-plus fs-1"></i>
                        <h4>Create satuan</h4>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="mb-3">
                            <label for="kodesatuan" class="form-label">Kode satuan</label>
                            <input class="form-control @error ('kodesatuan') is-invalid @enderror" type="text" name="kodesatuan" id="kodesatuan" value="{{ old('kodesatuan') }}" placeholder="masukkan kode satuan">
                            @error('kodesatuan')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="namasatuan" class="form-label">Nama satuan</label>
                            <input class="form-control @error('namasatuan') is-invalid @enderror" type="text" name="namasatuan" id="namasatuan" value="{{ old('namasatuan') }}" placeholder="masukkan nama satuan">
                            @error('namasatuan')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 d-grid">
                            <a href="{{ route('barang.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i class="bi-arrow-left-circle me-2"></i> Cancel</a>
                        </div>
                        <div class="col-md-6 d-grid">
                            <button type="submit" class="btn btn-dark btn-lg mt-3"><i class="bi-check-circle me-2"></i> Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection