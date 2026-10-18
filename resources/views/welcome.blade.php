@extends('layouts.app')

@section('title', 'Beranda - Wahana Bermain')

@section('content')

<style>
    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        font-family: Arial, sans-serif;
        background: #f4f7fb;
        color: #243b64;
    }

    .hero {
        text-align: center;
        padding: 90px 20px;
        background: linear-gradient(135deg, #dbeafe, #eff6ff);
    }

    .hero h1 {
        font-size: 40px;
        margin-bottom: 15px;
    }

    .hero p {
        max-width: 650px;
        margin: 0 auto 25px;
        line-height: 1.8;
        color: #475569;
    }

    .tombol {
        display: inline-block;
        background: #2563eb;
        color: white;
        padding: 13px 22px;
        border-radius: 6px;
        text-decoration: none;
        margin: 5px;
    }

    .informasi {
        padding: 45px 8%;
        text-align: center;
    }

    .fitur {
        display: flex;
        justify-content: center;
        gap: 20px;
        flex-wrap: wrap;
        margin-top: 30px;
    }

    .kartu {
        background: white;
        padding: 25px;
        border-radius: 10px;
        width: 260px;
        box-shadow: 0 3px 12px #00000010;
    }

    .kartu h3 {
        color: #2563eb;
    }

    footer {
        background: #243b64;
        color: white;
        text-align: center;
        padding: 20px;
        margin-top: 30px;
    }

    @media (max-width: 600px) {
        .hero h1 {
            font-size: 30px;
        }
    }
</style>

<section class="hero">
    <h1>Selamat Datang di Wahana Bermain</h1>

    <p>
        Temukan berbagai wahana bermain yang menarik untuk mengisi
        waktu liburan bersama keluarga dan teman. Lihat informasi
        wahana, lokasi, harga tiket, dan jam operasionalnya.
    </p>

    <a href="/informasi" class="tombol">Lihat Informasi Wahana</a>
    <a href="/admin/login" class="tombol">Login Admin</a>
</section>

<section class="informasi">
    <h2>Jelajahi Wahana Favoritmu</h2>

    <p>Dapatkan informasi wahana dengan mudah sebelum berkunjung.</p>

    <div class="fitur">
        <div class="kartu">
            <h3>Informasi Wahana</h3>
            <p>Lihat deskripsi dan informasi setiap wahana bermain.</p>
        </div>

        <div class="kartu">
            <h3>Harga Tiket</h3>
            <p>Ketahui harga tiket wahana sebelum merencanakan kunjungan.</p>
        </div>

        <div class="kartu">
            <h3>Jam Operasional</h3>
            <p>Periksa jam operasional agar kunjungan lebih terencana.</p>
        </div>
    </div>
</section>

<footer>
    <p>&copy; 2026 Wahana Bermain | Website Informasi Wahana</p>
</footer>

@endsection
