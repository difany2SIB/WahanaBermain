<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Wahana Bermain</title>

    <link rel="stylesheet" href="{{ asset('css/volt.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/dist/css/bootstrap.min.css') }}">
</head>
<body>

    <main class="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm mb-4">
            <div class="container-fluid">
                <h4 class="mb-0">Dashboard Admin</h4>

                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-outline-danger btn-sm">
                        Logout
                    </button>
                </form>
            </div>
        </nav>

        <div class="container-fluid px-4">
            <h2 class="mb-2">Selamat Datang, Admin!</h2>
            <p class="text-gray">
                Kelola informasi dan data wahana bermain melalui halaman ini.
            </p>

            <div class="row mt-4">
                <div class="col-12 col-md-6 col-xl-4 mb-4">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Data Wahana</h5>
                            <p class="card-text">
                                Tambah, lihat, ubah, dan hapus data wahana bermain.
                            </p>
                            <a href="{{ route('wahana.index') }}" class="btn btn-primary">
                                Kelola Wahana
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>