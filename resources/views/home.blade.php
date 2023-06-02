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
    <header class="py-5 bg-image-full" style="background-image: url('https://source.unsplash.com/wfh8dDlNFOk/1600x900')">
        <div class="text-center my-5">
            <img class="img-fluid rounded-circle mb-3" src="{{ Vite::asset('resources/asset/profil.jpeg') }}" style="width: 150px; height: 150px"/>
            <h1 class="text-white fs-3 fw-bolder">Welcome Muhammad Paksi Satriawan</h1>
            <p class="text-white-50 mb-0">this is welcome page</p>
        </div>
    </header>
    <div class="container-xxl mt-5">
        <div class="d-flex align-items-center py-2 px-4 bg-light rounded-3 border">
            <div class="bi bi-house me-3 fs-1"></div>
            <h4 class="mb-0">Welcome.</h4>
        </div>
    </div>

    @vite('resources/js/app.js')
</body>
</html>
