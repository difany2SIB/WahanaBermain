@extends('layouts.app')

@section('title', 'Data Wahana Bermain')

@section('content')
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
            padding: 30px;
        }

        .container {
            max-width: 1000px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
        }

        h1 {
            color: #243b64;
        }

        .tambah {
            display: inline-block;
            background: #2563eb;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background: #243b64;
            color: white;
        }

        .aksi a, .aksi button {
            margin-right: 5px;
            padding: 6px 9px;
            border: none;
            border-radius: 4px;
            text-decoration: none;
            cursor: pointer;
        }

        .edit {
            background: #facc15;
            color: black;
        }

        .hapus {
            background: #dc2626;
            color: white;
        }

        .pesan {
            background: #dcfce7;
            color: #166534;
            padding: 12px;
            margin-bottom: 15px;
            border-radius: 5px;
        }
    </style>
    <div class="container">
        <h1>Pengelolaan Wahana Bermain</h1>
        <p>Daftar informasi dan data wahana bermain.</p>

        @if (session('success'))
            <div class="pesan">{{ session('success') }}</div>
        @endif

        <a href="{{ route('wahana.create') }}" class="tambah">
            + Tambah Wahana
        </a>

        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Wahana</th>
                    <th>Lokasi</th>
                    <th>Harga Tiket</th>
                    <th>Jam Operasional</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($wahanas as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama_wahana }}</td>
                        <td>{{ $item->lokasi }}</td>
                        <td>Rp {{ number_format($item->harga_tiket, 0, ',', '.') }}</td>
                        <td>{{ $item->jam_operasional }}</td>
                        <td class="aksi">
                            <a href="{{ route('wahana.show', $item->id) }}">Detail</a>
                            <a href="{{ route('wahana.edit', $item->id) }}" class="edit">Edit</a>

                            <form action="{{ route('wahana.destroy', $item->id) }}"
                                  method="POST"
                                  style="display:inline;"
                                  onsubmit="return confirm('Yakin ingin menghapus wahana ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="hapus">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">Belum ada data wahana.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection