@extends('layouts.app')

@section('title', 'Detail Wahana')

@section('content')
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            padding: 30px;
        }

        .container {
            max-width: 650px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
        }

        h1 {
            color: #243b64;
        }

        .data {
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }

        .tombol {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 15px;
            border-radius: 5px;
            text-decoration: none;
            color: white;
            background: #2563eb;
        }

        .edit {
            background: #eab308;
            color: black;
        }
    </style>
    <div class="container">
        <h1>Detail Wahana</h1>

        <div class="data">
            <strong>Nama Wahana:</strong> {{ $wahana->nama_wahana }}
        </div>

        <div class="data">
            <strong>Deskripsi:</strong> {{ $wahana->deskripsi }}
        </div>

        <div class="data">
            <strong>Lokasi:</strong> {{ $wahana->lokasi }}
        </div>

        <div class="data">
            <strong>Harga Tiket:</strong>
            Rp {{ number_format($wahana->harga_tiket, 0, ',', '.') }}
        </div>

        <div class="data">
            <strong>Jam Operasional:</strong>
            {{ $wahana->jam_operasional }}
        </div>

        <a href="{{ route('wahana.index') }}" class="tombol">
            Kembali
        </a>

        <a href="{{ route('wahana.edit', $wahana->id) }}" class="tombol edit">
            Edit Wahana
        </a>
    </div>
@endsection