<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UTS Pemograman Framework</title>
    <link href="resources/css/app.css" rel="stylesheet" />
    @vite('resources/sass/app.scss')
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="home">UTS Pemograman Framework</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" aria-current="page" href="barang">Barang</a></li>
                    <li class="nav-item"><a class="nav-link" href="about">About <menu type="toolbar"></menu></a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="container-sm my-5">
        <div class="row justify-content-center">
            <div class="p-5 bg-light rounded-3 col-xl-4 border">
                <div class="mb-3 text-center">
                    <i class="bi-person-circle fs-1"></i>
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
                        <h5>{{ $databarang->nama_satuan }}</h5>
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

    

    @vite('resources/js/app.js')
</body>
</html>
