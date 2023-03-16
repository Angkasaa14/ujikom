<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <style>
        body {
            background: #122F67;
        }

        .btn-purple {
            background: #122F67;
            width: 100%;
            color: #fff;
        }

        .btn-warning {
            color: #fff;
            border: 1px solid #fff;
            background: #122F67;
        }

    </style>

    <title>Halaman Masuk Petugas dan Admin</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <h2 class="text-center text-white mb-0 mt-5">Ruang Masyarakat</h2>
                <P class="text-center text-white mb-5">Pengaduan Masyarakat</P>
                <div class="card mt-5">
                    <div class="card-body">
                        <h2 class="text-center mb-5">FORM PETUGAS/ADMIN</h2>
                        <form action="{{ route('admin.login') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="username" placeholder="Nama Pengguna" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" placeholder="Kata Sandi" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-purple">MASUK</button>
                            <a href="{{ route('pekat.index') }}" class="btn btn-warning text-white mt-3" style="width: 100%">Kembali
                    ke Halaman Utama</a>
                        </form>
                    </div>
                </div>
                

            </div>
        </div>
    </div>
</body>

</html>
