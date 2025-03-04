@extends('app')
@section('title', 'Dashboard')
@section('content')

        <!-- Main Content -->
        <main class="flex-1 p-6">
            <header class="flex justify-between items-center mb-5">
                <h1 class="text-2xl font-semibold">Announcement Overview</h1>
                {{-- <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Logout</button> --}}
            </header>
            
            {{-- article --}}
            <article class="flex bg-white transition rounded mt-3 hover:shadow-xl">
                <div class="rotate-180 p-2 [writing-mode:_vertical-lr]">
                  <time
                    datetime="2022-10-10"
                    class="flex items-center justify-between gap-4 text-xs font-bold text-gray-900 uppercase"
                  >
                    <span>2025</span>
                    <span class="w-px flex-1 bg-gray-900/10"></span>
                    <span>Feb 21</span>
                  </time>
                </div>
              
                <div class="hidden sm:block sm:basis-56">
                  <img
                    alt=""
                    src="https://i.pinimg.com/736x/60/c6/93/60c6938bdb776f2da4b26a5735f78484.jpg"
                    class="aspect-square h-full w-full object-cover"
                  />
                </div>
              
                <div class="flex flex-1 flex-col justify-between">
                  <div class="border-s border-gray-900/10 p-4 sm:border-l-transparent sm:p-6">
                    <a href="#">
                      <h3 class="font-bold text-gray-900 uppercase">
                        Apriliyanto Dwi Saputra - Graphic Designer & Web Developer
                      </h3>
                    </a>
              
                    <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-700">
                      Passionate about creative design and web development, I specialize in crafting visually compelling graphics and building user-friendly websites. Currently pursuing a degree in Informatics, I am eager to explore innovative solutions in the digital world.
                    </p>
                  </div>
              
                  <div class="sm:flex sm:items-end sm:justify-end">
                    <a href="#" class="block bg-yellow-300 px-5 py-3 text-center text-xs font-bold text-gray-900 uppercase transition hover:bg-yellow-400">Informatics Student</a>
                  </div>
                </div>
              </article>

              {{-- kolom pemberitahuan --}}
              <div class="bg-white p-4 mt-5 rounded shadow">
                {{-- <h2 class="text-lg font-bold">Announcement</h2> --}}
                <p class="text-xl">Striving to blend creativity with technology to build impactful digital experiences.</p>
            </div>

            <div class="grid grid-cols-3 gap-4 mt-4">
                <div class="bg-white p-4 rounded shadow">
                    <h3 class="text-lg font-bold">Graphic Design</h3>
                    <p class="text-2xl">Logos, Branding, UI/UX</p>
                </div>
                <div class="bg-white p-4 rounded shadow">
                    <h3 class="text-lg font-semibold">Web Development</h3>
                    <p class="text-2xl">HTML, CSS, JavaScript, Laravel</p>
                </div>
                <div class="bg-white p-4 rounded shadow">
                    <h3 class="text-lg font-semibold">Video Editing</h3>
                    <p class="text-2xl">Adobe After Effect</p>
                </div>
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