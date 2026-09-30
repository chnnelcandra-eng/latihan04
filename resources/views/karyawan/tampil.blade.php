@extends('layouts.main')
@section('title', 'Karyawan')

@section('content')
    <h2>Data Karyawan: Toko Kita</h2>

    <x-alert type="warning">
        <strong>Perhatian!</strong> Pastikan data karyawan diperbarui setiap bulan.
    </x-alert>

    <table>
        <tr>
            <th>No</th>
            <th>Nama Karyawan</th>
            <th>Jabatan</th>
            <th>Gaji</th>
            <th>Status</th>
        </tr>
        @foreach($karyawan as $i => $k)
        <tr>
            <td>{{ $i + 1 }}</td>
            <td>{{ $k['nama'] }}</td>
            <td>{{ $k['jabatan'] }}</td>
            <td>Rp {{ number_format($k['gaji'], 0, ',', '.') }}</td>
            <td>
                @if($k['aktif'])
                    Aktif
                @else
                    <span class="badge-secondary">Non-Aktif</span>
                @endif
            </td>
        </tr>
        @endforeach
    </table>

    <p><strong>Total Karyawan:</strong> {{ count($karyawan) }}</p>
@endsection