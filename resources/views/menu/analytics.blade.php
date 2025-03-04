@extends('app')
@section('title', 'Analytics')
@section('content')

        <!-- Main Content -->
        <main class="flex-1 p-6">
            <header class="flex justify-between items-center mb-5">
                <h1 class="text-2xl font-semibold">Announcement Overview</h1>
                {{-- <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Tambah</button> --}}
            </header>
            
            {{-- chart --}}
            <div class="relative flex flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
                <div class="pt-6 px-2 pb-0">
                  <div id="bar-chart"></div>
                </div>
              </div>

              {{-- kolom pemberitahuan --}}
            <div class="grid grid-cols-3 gap-4 mt-2">
                <div class="bg-white p-4 rounded shadow hover:shadow-xl">
                    <h3 class="text-lg font-semibold">Revenue</h3>
                    <p class="text-2xl">$4,560</p>
                </div>
                <div class="bg-white p-4 rounded shadow hover:shadow-xl">
                    <h3 class="text-lg font-semibold">Operational Expenses</h3>
                    <p class="text-2xl">$1,730</p>
                </div>
                <div class="bg-white p-4 rounded shadow hover:shadow-xl">
                    <h3 class="text-lg font-semibold">Financial Accounting</h3>
                    <p class="text-2xl">$3,130</p>
                </div>
              </div>

              {{-- annaouncement --}}
              <div class="bg-white p-4 mt-3 rounded shadow">
                <h2 class="text-lg font-bold">Information for Today</h2>
                <p class="text-xl">Little profit because it is still creating a new business.</p>
              </div>

                {{-- tombol ke halaman kosong --}}
                <div class="bg-white p-4 mt-4 rounded shadow">
                  <div>
                    <a href="{{ route('settings') }}" type="submit" class="flex w-full justify-center rounded-md bg-blue-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-blue-700 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Setting</a>
                  </div>
                </div>  


            </div>
        </main>
    </div>
@endsection