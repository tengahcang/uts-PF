@extends('layouts.app')
@section('halaman')
    <div class="container-sm mt-5">
        <form action="{{ route('barang.store') }}" method="POST">
            @csrf
            <div class="row justify-content-center">
                <div class="p-5 bg-light rounded-3 border col-xl-6">
                    <div class="mb-3 text-center">
                        <i class="bi bi-file-earmark-plus fs-1"></i>
                        <h4>Create Employee</h4>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="kodebarang" class="form-label">Kode barang</label>
                            <input class="form-control @error ('kodebarang') is-invalid @enderror" type="text" name="kodebarang" id="kodebarang" value="{{ old('kodebarang') }}" placeholder="masukkan kode barang">
                            @error('kodebarang')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        {{-- <div class="col-md-6 mb-3">
                            <label for="firstName" class="form-label">First Name</label>
                            <input class="form-control" type="text" name="firstName" id="firstName" value="" placeholder="Enter First Name">
                            @if ($errors->has('firstName'))
                                <span>
                                    {{ $error }}
                                </span>
                            @endif
                        </div> --}}
                        <div class="col-md-6 mb-3">
                            <label for="namabarang" class="form-label">Nama barang</label>
                            <input class="form-control @error('namabarang') is-invalid @enderror" type="text" name="namabarang" id="namabarang" value="{{ old('namabarang') }}" placeholder="masukkan nama barang">
                            @error('namabarang')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        {{-- <div class="col-md-6 mb-3">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input class="form-control" type="text" name="lastName" id="lastName" value="" placeholder="Enter Last Name">
                            @if ($errors->has('lastName'))
                                <span>
                                    <strong>{{ $error }}</strong>
                                </span>
                            @endif
                        </div> --}}
                        <div class="col-md-6 mb-3">
                            <label for="hargabarang" class="form-label">Harga barang</label>
                            <input class="form-control @error('hargabarang') is-invalid @enderror" type="text" name="hargabarang" id="hargabarang" value="{{ old('hargabarang') }}" placeholder="masukkan harga barang">
                            @error('hargabarang')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        {{-- <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input class="form-control" type="text" name="email" id="email" value="" placeholder="Enter Email">
                            @if ($errors->has('email'))
                                <span>
                                    <strong>{{ $error }}</strong>
                                </span>
                            @endif
                        </div> --}}
                        <div class="col-md-6 mb-3">
                            <label for="deskripsibarang" class="form-label">Deskripsi barang</label>
                            <input class="form-control @error('age') is-invalid @enderror" type="text" name="deskripsibarang" id="deskripsibarang" value="{{ old('deskripsibarang') }}" placeholder="masukkan deskripsi barang">
                            @error('deskripsibarang')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>    
                        {{-- <div class="col-md-6 mb-3">
                            <label for="age" class="form-label">Age</label>
                            <input class="form-control" type="text" name="age" id="age" value="" placeholder="Enter Age">
                            @if ($errors->has('age'))
                                <span>
                                    <strong>{{ $error }}</strong>
                                </span>
                            @endif
                        </div> --}}
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="unit" class="form-label">Satuan</label>
                        <select name="unit" id="unit" class="form-select">
                        @foreach ($units as $unit)
                            <option value="{{ $unit->id }}" {{ old('unit') == $unit->id ? 'selected' : '' }}>{{ $unit->kode_satuan.' - '.$unit->nama_satuan }}</option>
                        @endforeach
                        </select>
                        @error('unit')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    {{-- <div class="col-md-12 mb-3">
                        <label for="position" class="form-label">Position</label>
                        <select name="position" id="position" class="form-select">
                            @foreach ($positions as $position)
                                <option value="{{ $position->id }}" {{ old('position') == $position->id ? 'selected' : '' }} > {{ $position->code.' - '.$position->name }}></option>
                            @endforeach
                        </select>
                    </div> --}}
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