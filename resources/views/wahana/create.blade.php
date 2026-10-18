@extends('layouts.app')

@section('title', 'Tambah Wahana')

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

        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 6px;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        textarea {
            height: 100px;
        }

        button {
            margin-top: 20px;
            background: #2563eb;
            color: white;
            padding: 12px 18px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .kembali {
            color: #243b64;
            margin-left: 10px;
        }

        .error {
            color: red;
            font-size: 14px;
        }
    </style>
    <div class="container">
        <h1>Tambah Wahana Bermain</h1>

        @if ($errors->any())
            <div class="error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('wahana.store') }}" method="POST">
            @csrf

            <label>Nama Wahana</label>
            <input type="text" name="nama_wahana"
                   value="{{ old('nama_wahana') }}" required>

            <label>Deskripsi</label>
            <textarea name="deskripsi" required>{{ old('deskripsi') }}</textarea>

            <label>Lokasi</label>
            <input type="text" name="lokasi"
                   value="{{ old('lokasi') }}" required>

            <label>Harga Tiket (Rp)</label>
            <input type="number" name="harga_tiket" min="0" step="0.01"
                   value="{{ old('harga_tiket') }}" required>

            <label>Jam Operasional</label>
            <input type="text" name="jam_operasional"
                   placeholder="Contoh: 09.00 - 17.00"
                   value="{{ old('jam_operasional') }}" required>

            <button type="submit">Simpan Wahana</button>
            <a href="{{ route('wahana.index') }}" class="kembali">Kembali</a>
        </form>
    </div>
@endsection