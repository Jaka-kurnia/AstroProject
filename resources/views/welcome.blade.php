<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite (['resources/css/app.css', 'resources/js/app.js'])
    @else
    @endif
</head>

<body>

    <body class="bg-white text-gray-800">
        <!-- HEADER -->
        <header class="bg-white shadow-sm border-b z-40 fixed w-full">
            <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between ">
                <div class="flex items-center gap-3">
                    <img src="/logo-wedding.png" alt="Wedding Project Logo" class="w-10 h-10">
                    <span class="font-semibold text-lg">Astro Wedding Project</span>
                </div>

                <nav class="hidden lg:flex gap-8 text-sm">
                    <a href="#about-us" class="hover:text-[#C29A6E]">Tentang Kami</a>
                    <a href="#services" class="hover:text-[#C29A6E]">Layanan</a>
                    <a href="#portfolio" class="hover:text-[#C29A6E]">Portofolio</a>
                    <a href="#contact" class="hover:text-[#C29A6E]">Kontak</a>
                </nav>

                @if (Route::has('login'))
                    <div class="gap-4 flex">
                        @auth
                            <a href="{{ url('/dashboard') }}"
                                class="px-4 py-2 text-sm border border-gray-800 rounded hover:bg-gray-800 hover:text-white">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}"
                                class="px-4 py-2  text-[#C29A6E] text-sm rounded hover:bg-[#C29A6E] hover:text-white">
                                Login
                            </a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="px-4 py-2  text-[#C29A6E] text-sm rounded hover:bg-[#C29A6E] hover:text-white">
                                    Register
                                </a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </header>

        <!-- HERO -->
        <section class="w-full min-h-screen flex items-center bg-cover bg-center"
            style="background-image: url('{{ asset('assets/img/nikah.jpg') }}')">
            <!-- OVERLAY -->
            <div class="absolute inset-0 bg-gradient-to-r from-blue-900/80 via-blue-800/60 to-transparent"></div>

            <!-- CONTENT -->
            <div class="relative z-10 max-w-7xl mx-auto px-6 w-full">
                <div class="max-w-2xl">
                    <span class="inline-block mb-4 text-white/80 text-sm tracking-wide">
                        #AstroWeddingProject
                    </span>

                    <h1 class="text-white text-4xl md:text-5xl font-bold leading-tight mb-4">
                        Mewujudkan Pernikahan <br>
                        yang Sakral & Berkesan
                    </h1>

                    <p class="text-white/90 mb-8 text-lg">
                        Perencanaan pernikahan profesional dengan pendekatan terstruktur,
                        elegan, dan terpercaya.
                    </p>

                    <div class="flex items-center gap-4">
                        <a href="#contact"
                            class="px-6 py-3 bg-yellow-400 text-gray-900 font-medium rounded hover:bg-yellow-300 transition">
                            Konsultasi Sekarang
                        </a>

                        <a href="#about"
                            class="px-6 py-3 border border-white text-white rounded hover:bg-white hover:text-gray-900 transition">
                            Baca Selengkapnya
                        </a>
                    </div>
                </div>
            </div>

            <!-- SLIDER INDICATOR (OPTIONAL, ESTETIK) -->
            <div class="absolute bottom-6 left-1/2 -translate-x-1/2 flex gap-2">
                <span class="w-8 h-1 bg-white rounded"></span>
                <span class="w-8 h-1 bg-white/40 rounded"></span>
            </div>
        </section>


        <section class="py-20 bg-gray-50 overflow-hidden">
            <div class="max-w-7xl mx-auto px-6 relative">
                <div class="grid lg:grid-cols-2 gap-10 items-center">

                    <!-- IMAGE -->
                    <div class="relative h-[420px] rounded-xl overflow-hidden">
                        <img id="sliderImage" src="assets/img/service-1.jpg"
                            class="w-full h-full object-cover transition-all duration-500">
                    </div>

                    <!-- CARD AREA -->
                    <div class="relative h-[420px]">

                        <!-- ACTIVE CARD -->
                        <div id="cardActive"
                            class="absolute left-0 top-0 w-[360px] h-full
                           bg-blue-800 text-white rounded-xl
                           p-10 shadow-xl transition-all duration-500 z-20">

                            <h3 id="activeTitle" class="text-2xl font-bold mb-3">
                                Annual Reports
                            </h3>
                            <div class="w-10 h-1 bg-white mb-6"></div>
                            <p id="activeDesc" class="text-sm leading-relaxed mb-10">
                                Jelajahi kinerja, strategi bisnis dan pencapaian kami setiap tahunnya.
                            </p>
                            <div class="flex justify-end text-2xl">↗</div>
                        </div>

                        <!-- NEXT CARD -->
                        <div id="cardNext"
                            class="absolute left-[390px] top-0 w-[360px] h-full
                           bg-white text-gray-900 rounded-xl
                           p-10 shadow-md transition-all duration-500 z-10">

                            <h3 id="nextTitle" class="text-2xl font-bold mb-3">
                                Financial Reports
                            </h3>
                            <div class="w-10 h-1 bg-red-500 mb-6"></div>
                            <p id="nextDesc" class="text-sm leading-relaxed mb-10">
                                Akses laporan audit terbaru serta komitmen kami terhadap transparansi.
                            </p>
                            <div class="flex justify-end text-2xl">↗</div>
                        </div>
                    </div>
                </div>

                <!-- ARROWS -->
                <div class="absolute bottom-6 right-0 flex gap-3 z-30">
                    <button id="prevBtn"
                        class="w-12 h-12 bg-white border rounded-lg flex items-center justify-center
               hover:bg-gray-100 shadow">
                        ←
                    </button>
                    <button id="nextBtn"
                        class="w-12 h-12 bg-white border rounded-lg flex items-center justify-center
               hover:bg-gray-100 shadow">
                        →
                    </button>
                </div>

        </section>




        <!-- PORTFOLIO / GALLERY -->
        <section id="portfolio" class="py-16">
            <div class="max-w-7xl mx-auto px-6">
                <h3 class="text-2xl font-semibold text-center mb-8">Portofolio Kami</h3>
                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div class="bg-gray-200 h-40"></div>
                    <div class="bg-gray-200 h-40"></div>
                    <div class="bg-gray-200 h-40"></div>
                    <div class="bg-gray-200 h-40"></div>
                </div>
            </div>
        </section>

        <!-- CONTACT -->
        <section id="contact" class="py-16 bg-[#F7F3EF]">
            <div class="max-w-3xl mx-auto px-6 text-center">
                <h3 class="text-2xl font-semibold mb-4">Hubungi Kami</h3>
                <p class="text-gray-600 mb-6">
                    Siap membantu pernikahan impian Anda — hubungi tim kami sekarang.
                </p>
                <a href="mailto:contact@weddingproject.id"
                    class="px-6 py-3 bg-[#A67C52] text-white rounded hover:bg-[#8C693E]">
                    Email Kami
                </a>
            </div>
        </section>

        <!-- FOOTER -->
        <footer class="bg-gray-900 text-gray-300 py-6">
            <div class="max-w-7xl mx-auto px-6 text-sm text-center">
                &copy; {{ date('Y') }} Wedding Project. All Rights Reserved.
            </div>
        </footer>
    </body>

</body>

@include('layouts.script')

</html>
