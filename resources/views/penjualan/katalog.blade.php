@extends('layouts.main')

@section('content')
<h2>Katalog Barang</h2>

<table border="1" cellpadding="8" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama Item</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Diskon (%)</th>
            <th>Harga Bersih</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($items as $item)
            @php
                $hargaBersih = $item['harga'] - ($item['harga'] * $item['diskon_persen'] / 100);
            @endphp
            <tr @if ($loop->index < 2) style="background-color: pink;" @endif>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item['kode'] }}</td>
                <td>{{ $item['nama_item'] }}</td>
                <td>{{ $item['kategori'] }}</td>
                <td>Rp {{ number_format($item['harga'], 0, ',', '.') }}</td>
                <td>{{ $item['diskon_persen'] }}%</td>
                <td>Rp {{ number_format($hargaBersih, 0, ',', '.') }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection