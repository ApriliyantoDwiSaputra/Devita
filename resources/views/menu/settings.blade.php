@extends('app')
@section('title', 'Settinges')
@section('content')

    <!-- Main Content -->
    <div class="flex-1 p-6">
        <h1 class="text-2xl font-bold mb-4">Pengaturan Profil</h1>
        <div class="bg-white p-6 rounded-lg shadow-md max-w-lg">
            <form action="save_settings.php" method="POST">
                <div class="mb-4">
                    <label class="block mb-2 text-gray-700">Nama</label>
                    <input type="text" name="nama" class="w-full p-2 border rounded-md bg-gray-50" placeholder="Masukkan nama Anda" required>
                </div>
                
                <div class="mb-4">
                    <label class="block mb-2 text-gray-700">Email</label>
                    <input type="email" name="email" class="w-full p-2 border rounded-md bg-gray-50" placeholder="Masukkan email Anda" required>
                </div>
                
                <div class="mb-4">
                    <label class="block mb-2 text-gray-700">Password</label>
                    <input type="password" name="password" class="w-full p-2 border rounded-md bg-gray-50" placeholder="Masukkan password Anda" required>
                </div>
                
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Simpan</button>
            </form>
        </div>
    </div>
@endsection
