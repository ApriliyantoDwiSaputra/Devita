@extends('app')
@section('title', 'Karyawan')
@section('content')

        <!-- Main Content -->
        <main class="flex-1 p-6">
            <header class="bg-white rounded shadow-sm">
                <div class="mx-auto flex justify-between max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                    <h1 class="text-3xl font-bold tracking-tight text-gray-900">Data Karyawan</h1>
                    <a href="{{ route('karyawan.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Tambah</a>
                </div>
            </header>
        
            <main>
                <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white border border-gray-300">
                            <thead>
                                <tr class="bg-gray-800 text-white">
                                    <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">ID</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Nama</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Jabatan</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($karyawan as $data)
                                <tr class="border-b border-gray-300">
                                    <td class="px-6 py-4">{{ $data->id }}</td>
                                    <td class="px-6 py-4">{{ $data->nama }}</td>
                                    <td class="px-6 py-4">{{ $data->jabatan }}</td>
                                    <td class="px-6 py-4">
                                        <a href="{{ route('karyawan.show', $data->id) }}" class="text-blue-600 hover:underline">Detail</a>
                                        <a href="{{ route('karyawan.edit', $data->id) }}" class="text-blue-600 hover:underline">Edit</a>
                                        <form action="{{ route('karyawan.destroy', $data->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="mx-auto">
                            {{ $karyawan->links() }}
                        </div>
                    </div>
                </div>
            </main>
        </main>
    </div>
@endsection
        
