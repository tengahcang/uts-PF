@php
    $currentRouteName = Route::currentRouteName();
@endphp
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home')}}">UTS Pemograman Framework</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link @if($currentRouteName == 'home') active @endif" aria-current="page" href="{{ route('home')}}">Home</a></li>
                <li class="nav-item"><a class="nav-link @if($currentRouteName == 'barang.index') active @endif" aria-current="page" href="{{ route('barang.index')}}">Barang</a></li>
                <li class="nav-item"><a class="nav-link @if($currentRouteName == 'about') active @endif" href="{{ route('about')}}">About <menu type="toolbar"></menu></a></li>
            </ul>
        </div>
    </div>
</nav>