@extends('app')
@section('title', 'Karyawan')
@section('content')

<div class="flex-1 p-6">
    <h1 class="text-2xl font-bold mb-4">Tambah Karyawan</h1>
    <div class="bg-white p-6 rounded-lg shadow-md max-w-lg">
        <form action="{{ route('karyawan.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block mb-2 text-gray-700">Nama</label>
                <input type="text" name="nama" class="w-full p-2 border rounded-md bg-gray-50" placeholder="Masukkan nama Anda" required>
            </div>
            
            <div class="mb-4">
                <label class="block mb-2 text-gray-700">Jabatan</label>
                <input type="text" name="jabatan" class="w-full p-2 border rounded-md bg-gray-50" placeholder="Masukkan email Anda" required>
            </div>
            
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Simpan</button>
            <a href="{{ route('karyawan') }}" class="bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-600">Batal</a>
        </form>
    </div>
</div>
@endsection
