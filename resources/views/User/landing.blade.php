@extends('layouts.user')

@section('css')
<link rel="stylesheet" href="{{ asset('css/landing.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    .notification {
        padding: 14px;
        text-align: center;
        background: #f4b704;
        color: #fff;
        font-weight: 300;
    }
</style>
@endsection

@section('title', 'Ruang Masyarakat')

@section('content')
{{-- Section Header --}}
<section class="header">
    <!-- @if (Auth::guard('masyarakat')->check() && Auth::guard('masyarakat')->user()->email_verified_at == null)
    <div class="row">
        <div class="col">
            <div class="notification">
                Konfirmasi email <span class="font-weight-bold">{{ Auth::guard('masyarakat')->user()->email }}</span>
                untuk melindungi akun Anda.
                <form action="{{ route('pekat.sendVerification') }}" method="POST" style="display: inline-block">
                    @csrf
                    <button type="submit" class="btn btn-white">Verifikasi Sekarang</button>
                </form>
            </div>
        </div>
    </div>
    @endif -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
        <div class="container">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <h4 class="semi-bold mb-0 text-white">Ruang Masyarakat</h4>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    @if(Auth::guard('masyarakat')->check())
                    <ul class="navbar-nav text-center ml-auto">
                        <li class="nav-item">
                            <a class="nav-link ml-3 text-white" href="{{ route('pekat.laporan') }}">Laporan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ml-3 text-white" href="{{ route('pekat.logout') }}"
                                 onclick="return confirm('Apakah Anda Yakin ingin Keluar?')">{{ Auth::guard('masyarakat')->user()->nama }}</a>
                        </li>
                    </ul>
                    @else
                    <ul class="navbar-nav text-center ml-auto">
                        <li class="nav-item">
                            <button class="btn text-white" type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#loginModal">Masuk</button>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pekat.formRegister') }}" class="btn btn-outline-purple">Daftar</a>
                        </li>
                    </ul>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

            <div class="container">
                <div class="row">
                    <div class="col-7">
                        <img class="gambare" src="{{asset('images/gambaree.png')}}"width="55%" alt="" class="ml-5">
                    </div>
                    <div class="col-5 ">
                        <h2 class="medium text-white mt-5 text-center" style="font-size: 30px; font-weight: bold;">Layanan Pengaduan Online</h2>
                        <h2 class="medium text-white mt-3 text-center">Sampaikan laporan anda langsung <br>kepada instansi yang berwenang</h2>
                        <div class="d-flex justify-content-center mr-5 mt-5">
                            <a class="tentanggg" href="">Tentang Website ini</a>
                        </div>
                    </div>
                </div>
                <!-- <div class="textt">
                
            </div> -->

        
</section>  
<div class="container-box">
             <div class="box border1"> <h5>Tulis Laporan</h5><p>Laporkan keluhan anda dengan jelas dan lengkap</p></div>
                                            
             <div class="box border2"> <h5>Proses Verifikasi</h5><p>Dalam 3 hari,laporan anda akan diverifikasi dan diteruskan kepada instansi berwenang</p></div>

             <div class="box border3"> <h5>Proses Tindak Lanjut</h5><p>Dalam 5 hari,instansi akan menindaklanjuti dan membalas laporan anda</p></div>
    
             <div class="box border4"> <h5>Selesai</h5><p>Laporan anda akan terus ditindaklanjuti hingga terselesaikan</p></div>
</div>


{{-- Footer --}}
<footer>
    <div class="mt-5">
            <hr>
        <div class="text-center">
            <p class="italic text-white">Copyright©2023: M angkasa</p>
        </div>
    </div>
</footer>
{{-- Modal --}}
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <h3 class="mt-3">Masuk terlebih dahulu</h3>
                <p>Silahkan masuk menggunakan akun yang sudah didaftarkan.</p>
                <form action="{{ route('pekat.login') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="username">Nama Pengguna</label>
                        <input type="text" name="username" id="username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Kata Sandi</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-purple text-white mt-3" style="width: 100%">MASUK</button>
                </form>
                @if (Session::has('pesan'))
                <div class="alert alert-danger mt-2">
                    {{ Session::get('pesan') }}
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
@if (Session::has('pesan'))
<script>
    $('#loginModal').modal('show');

</script>
@endif
@endsection
