@extends('app')
@section('title', 'Detail Karyawan')
@section('content')


@section('content')
    <div class="max-w-lg mx-auto bg-white shadow-lg rounded-lg p-6 mt-10">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Detail Karyawan</h2>

        <div class="mb-3">
            <p class="text-gray-700"><strong>Nama:</strong> {{ $karyawan->nama }}</p>
        </div>
        <div class="mb-3">
            <p class="text-gray-700"><strong>Jabatan:</strong> {{ $karyawan->jabatan }}</p>
        </div>
        <div class="mb-3">
            <p class="text-gray-700"><strong>Tanggal:</strong> {{ $absensi->tanggal }}</p>
        </div>
        <div class="mb-3">
            <p class="text-gray-700"><strong>Jam Masuk:</strong> {{ $absensi->jam_masuk }}</p>
        </div>
        <div class="mb-3">
            <p class="text-gray-700"><strong>Jam Keluar:</strong> {{ $absensi->jam_keluar }}</p>
        </div>

        <a href="{{ route('karyawan') }}" 
           class="inline-block mt-4 px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition">
            Kembali
        </a>
    </div>
@endsection