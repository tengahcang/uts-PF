@extends('layouts.app')
@section('halaman')
    <div class="container px-5 pb-5 content-center">
        <div class="row gx-5 content-center">
            <div class="col-xxl-5"> 
                <div class="text-center text-xxl-start">
                    <div class="text-left my-5">
                        <table class="table table-border-0"  width="100%" >
                            <tbody>
                                <tr>
                                    <th>NIM</th>
                                    <th>1204210041</th>
                                </tr>
                                <tr>
                                    <th>Nama lengkap</th>
                                    <th>Muhammad Paksi Satriawan</th>
                                </tr>
                                <tr>
                                    <th>Nama panggilan</th>
                                    <th>Paksi</th>
                                </tr>
                                <tr>
                                    <th>Tempat dan tanggal lahir</th>
                                    <th>Bangkalan, 21/02/2002</th>
                                </tr>
                                <tr>
                                    <th>Jenis kelamin</th>
                                    <th>Laki-laki</th>
                                </tr>
                                <tr>
                                    <th>Agama</th>
                                    <th>Islam</th>
                                </tr>
                                <tr>
                                    <th>Kewarganegaraan</th>
                                    <th>Indonesia</th>
                                </tr>
                                <tr>
                                    <th>Hobi</th>
                                    <th>Game</th>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <th>cangg522@gmail.com</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-xxl-7">
                <div class="content-right">
                    <div style="width: 100%">
                        <img src="{{Vite::asset('resources/asset/IMG_6224.JPG')}}" style="width:50% ">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection