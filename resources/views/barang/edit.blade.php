@extends('layouts.app')
@section('halaman')
    <div class="container-sm mt-5">
        <form action="{{ route('barang.update',['barang' => $barang->id]) }}" method="POST">
            @method('put')
            <div class="row justify-content-center">
                <div class="p-5 bg-light rounded-3 border col-xl-6">
                    <div class="mb-3 text-center">
                        <i class="bi bi-wrench-adjustable fs-1"></i>
                        <h4>Edit Barang</h4>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="kodebarang" class="form-label">Kode barang</label>
                            <input class="form-control @error ('kodebarang') is-invalid @enderror" type="text" name="kodebarang" id="kodebarang" value="{{ old('kodebarang',$barang->kode_barang) }}" placeholder="masukkan kode barang">
                            @error('kodebarang')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="namabarang" class="form-label">Nama barang</label>
                            <input class="form-control @error('namabarang') is-invalid @enderror" type="text" name="namabarang" id="namabarang" value="{{ old('namabarang',$barang->nama_barang) }}" placeholder="masukkan nama barang">
                            @error('namabarang')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="hargabarang" class="form-label">Harga barang</label>
                            <input class="form-control @error('hargabarang') is-invalid @enderror" type="text" name="hargabarang" id="hargabarang" value="{{ old('hargabarang',$barang->harga_barang) }}" placeholder="masukkan harga barang">
                            @error('hargabarang')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="deskripsibarang" class="form-label">Deskripsi barang</label>
                            <input class="form-control @error('age') is-invalid @enderror" type="text" name="deskripsibarang" id="deskripsibarang" value="{{ old('deskripsibarang',$barang->deskripsi_barang) }}" placeholder="masukkan deskripsi barang">
                            @error('deskripsibarang')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>    
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="unit" class="form-label">Satuan</label>
                        <select name="unit" id="unit" class="form-select">
                            @php
                                $selected = "";
                                if ($errors->any())
                                    $selected = old('unit');
                                else
                                    $selected = $barang->unit_id;
                            @endphp
                            @foreach ($units as $unit)
                                <option value="{{ $unit->id }}" {{ $selected == $unit->id ? 'selected' : '' }}>{{ $unit->kode_satuan.' - '.$unit->nama_satuan }}</option>
                            @endforeach
                        </select>
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
            @csrf
        </form>
    </div>
@endsection