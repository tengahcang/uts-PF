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
    
    <div class="container-xxl mt-5">
        <div class="d-flex align-items-center py-2 px-4 bg-light rounded-3 border">
            <div class="bi bi-house me-3 fs-1"></div>
            <h4 class="mb-0">Welcome ini adalah barang mu</h4>
        </div>
    </div>

    <div class="row mb-0">
        <div class="col-lg-3 col-xl-2">
            <div class="d-grid gap-2">
                <a class="btn btn-primary" href="{{ route('barang.create') }}">Create</a>
            </div>
        </div>
    </div>

    <div class="table-responsive border p-3 rounded-3">
        <table class="table table-bordered table-hover table-striped mb-0 bg-white">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Kode_Barang</th>
                    <th>Nama_Barang</th>
                    <th>Harga_Barang</th>
                    <th>Deskripsi_Barang</th>
                    <th>Satuan_Barang</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listbarang as $barang)
                    <tr>
                        <td>{{ $barang->id }}</td>
                        <td>{{ $barang->kode_barang }}</td>
                        <td>{{ $barang->nama_barang }}</td>
                        <td>{{ $barang->harga_barang }}</td>
                        <td>{{ $barang->deskripsi_barang }}</td>
                        <td>{{ $barang->nama_satuan }}</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ route('barang.show', ['barang' => $barang->id]) }}" class="btn btn-outline-dark btn-sm me-2"><i class="bi-person-lines-fill"></i></a>
                                <a href="{{ route('barang.edit', ['barang' => $barang->id]) }}" class="btn btn-outline-dark btn-sm me-2"><i class="bi-pencil-square"></i></a>
                                <div>
                                    <form action="{{ route('barang.destroy', ['barang' => $barang->id]) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-outline-dark btn-sm me-2"><i class="bi-trash"></i></button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @vite('resources/js/app.js')
</body>
</html>
