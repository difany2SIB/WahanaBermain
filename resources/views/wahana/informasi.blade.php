@extends('layouts.app')

@section('title', 'Informasi Wahana Bermain')

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

        nav {
            background: #243b64;
            color: white;
            padding: 20px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
        }

        nav h2 {
            margin: 0;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 15px;
        }

        .judul {
            background: #dbeafe;
            padding: 45px 20px;
            text-align: center;
        }

        .judul h1 {
            margin-top: 0;
        }

        .judul p {
            line-height: 1.7;
        }

        .daftar {
            padding: 35px 8%;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 22px;
        }

        .kartu {
            background: white;
            padding: 22px;
            border-radius: 10px;
            box-shadow: 0 3px 12px #00000010;
        }

        .kartu h2 {
            color: #2563eb;
            margin-top: 0;
        }

        .kartu p {
            line-height: 1.6;
            overflow-wrap: anywhere;
        }

        .harga {
            font-size: 20px;
            font-weight: bold;
            color: #15803d;
        }

        .kosong {
            grid-column: 1 / -1;
            text-align: center;
            background: white;
            padding: 30px;
            border-radius: 10px;
        }

        footer {
            background: #243b64;
            color: white;
            text-align: center;
            padding: 20px;
        }
    </style>


    

    <section class="judul">
        <h1>Informasi Wahana Bermain</h1>
        <p>
            Temukan berbagai pilihan wahana, ketahui harga tiket,
            lokasi, dan jam operasional sebelum berkunjung.
        </p>
    </section>

<section class="pencarian">
    <input type="text" placeholder="Cari nama wahana...">
</section>

    <section class="daftar">
        @forelse ($wahanas as $item)
            <div class="kartu">
                <h2>{{ $item->nama_wahana }}</h2>

                <p>{{ $item->deskripsi }}</p>

                <p>
                    <strong>Lokasi:</strong>
                    {{ $item->lokasi }}
                </p>

                <p class="harga">
                    Rp {{ number_format($item->harga_tiket, 0, ',', '.') }}
                </p>

                <p>
                    <strong>Jam Operasional:</strong><br>
                    {{ $item->jam_operasional }}
                </p>
            </div>
        @empty
            <div class="kosong">
                <h3>Belum Ada Informasi Wahana</h3>
                <p>Informasi wahana akan ditampilkan setelah data ditambahkan.</p>
            </div>
        @endforelse
    </section>

    <footer>
        <p>&copy; 2026 Wahana Bermain</p>
    </footer>
@endsection
