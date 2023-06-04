@extends('layouts.app')
@section('halaman')
    <header class="py-5 bg-image-full" style="background-image: url('https://source.unsplash.com/wfh8dDlNFOk/1600x900')">
        <div class="text-center my-5">
            <img class="img-fluid rounded-circle mb-3" src="{{ Vite::asset('resources/asset/profil.jpeg') }}" style="width: 150px; height: 150px"/>
            <h1 class="text-white fs-3 fw-bolder">Welcome Muhammad Paksi Satriawan</h1>
            <p class="text-white-50 mb-0">this is welcome page</p>
        </div>
    </header>
    <div class="container px-5 pb-5">
        <div class="row gx-5 align-items-center">
            <div class="col-xxl-5"> 
                <div class="text-center text-xxl-start">
                    <div class="text-left my-5">
                        <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">About Me</span></h2>
                        <p class="lead fw-light mb-4">My name is Muhammad Paksi Satriawan</p>
                        <p class="text-muted">Saya adalah seorang mahasiswa di Institut Teknologi Telkom Surabaya jurusan Sistem Informasi yang memiliki kemampuan dalam mengelola perlengkapan pada suatu event dan seorang teknisi hardware</p>
                        <div class="d-flex justify-content-left fs-2 gap-4">
                            <a class="btn btn-black btn-circle fs-1" href="https://github.com/tengahcang"><i class="bi-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-7">
                <div class="d-flex justify-content-center mt-5 mt-xxl-0">
                    <div class="profile bg-gradient-primary-to-secondary">
                        <img src="{{Vite::asset('resources/asset/welcome.svg')}}" style="height: 75% position: absolute; bottom: 0; left: 50%;">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
