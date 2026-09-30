@extends('layouts.main')
@section('title', 'Supplier')

@section('content')
    <h2>Data Supplier: Toko Kita</h2>

    <x-alert type="warning">
        <strong>Perhatian!</strong> Hubungi supplier aktif sebelum membuat pesanan barang.
    </x-alert>

    <table>
        <tr>
            <th>No</th>
            <th>Nama Supplier</th>
            <th>Kota</th>
            <th>Telepon</th>
            <th>Status</th>
        </tr>
        @foreach($supplier as $i => $s)
        <tr>
            <td>{{ $i + 1 }}</td>
            <td>{{ $s['nama'] }}</td>
            <td>{{ $s['kota'] }}</td>
            <td>{{ $s['telepon'] }}</td>
            <td>
                @if($s['aktif'])
                    Aktif
                @else
                    <span class="badge-secondary">Non-Aktif</span>
                @endif
            </td>
        </tr>
        @endforeach
    </table>

    <p><strong>Total Supplier:</strong> {{ count($supplier) }}</p>
@endsection