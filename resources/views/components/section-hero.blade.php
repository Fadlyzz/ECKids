<header class="bg-white shadow-sm sticky top-0 z-50 border-b border-gray-100">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        {{-- Logo Section --}}
        <div class="flex items-center gap-2">
            <div class="w-20 h-20 flex items-center justify-center overflow-hidden">
                <img src="{{ asset('images/Logo.png') }}" 
                    alt="Logo" 
                    class="w-15 h-15 object-contain">
            </div>
            <span class="text-2xl font-extrabold text-brand-brown tracking-tight">
                EnglishCafe<span class="text-brand-red">Kids</span>
            </span>
        </div>

        {{-- Desktop Navigation --}}
        {{-- Navigasi Desktop terlihat di layar md ke atas --}}
        <nav class="hidden md:flex space-x-4 font-semibold main-nav">
            <a href="#home-section" class="text-gray-600 hover:text-brand-orange transition">Home</a>
            <a href="#features-section" class="text-gray-600 hover:text-brand-orange transition">Features</a>
            <a href="#benefit-section" class="text-gray-600 hover:text-brand-orange transition">Benefit</a>
            <a href="#program-section" class="text-gray-600 hover:text-brand-orange transition">Program</a>
            <a href="#package-section" class="text-gray-600 hover:text-brand-orange transition">Package</a>
        </nav>

        {{-- Desktop CTA Button (Diperbarui dengan style dan teks "Consultation", hidden di mobile) --}}
        <a href="#" class="hidden md:block bg-brand-orange bg-gradient-to-r from-brand-orange to-brand-terra hover:bg-brand-terra text-white px-6 py-2 rounded-full font-bold shadow-md transition transform hover:scale-105">
            Consultation
        </a>

        {{-- Mobile Hamburger Button (Re-added untuk tampilan mobile) --}}
        <button id="mobile-menu-button" class="md:hidden text-brand-brown focus:outline-none text-2xl">
            <i class="fas fa-bars"></i>
        </button>
    </div>

    {{-- Mobile Menu Dropdown (Re-added, disembunyikan secara default, ditampilkan oleh JS di app.blade.php) --}}
    <nav id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-200 py-4 mobile-nav">
        <ul class="flex flex-col space-y-3 px-6 pb-2 font-medium">
            <li><a href="#home-section" class="block py-2 hover:text-brand-orange transition">Home</a></li>
            <li><a href="#features-section" class="block py-2 hover:text-brand-orange transition">Features</a></li>
            <li><a href="#benefit-section" class="block py-2 hover:text-brand-orange transition">Benefit</a></li>
            <li><a href="#program-section" class="block py-2 hover:text-brand-orange transition">Program</a></li>
            <li><a href="#package-section" class="block py-2 hover:text-brand-orange transition">Package</a></li>
            {{-- Mobile CTA --}}
            <li>
                <a href="#" class="block w-full text-center bg-brand-orange hover:bg-brand-terra text-white px-6 py-2 mt-4 rounded-full font-bold transition">
                    Consultation
                </a>
            </li>
        </ul>
    </nav>
</header>

<section id="home-section" class="relative bg-white overflow-hidden">
    <div class="container mx-auto px-6 py-16 md:py-24 grid md:grid-cols-2 gap-12 items-center">
        <div>
            <span class="inline-block py-1 px-3 rounded-full border border-brand-orange text-brand-orange text-sm font-bold mb-4 bg-white">
                🚀 Fun Learning
            </span>
            <h1 class="text-4xl md:text-6xl font-extrabold text-brand-brown leading-tight mb-6">
                Speaking English is <span class="text-brand-red">Fun</span> & <span class="text-brand-orange">Easy!</span>
            </h1>
            <p class="text-lg text-gray-500 mb-8 leading-relaxed">
                Bergabunglah dengan English Cafe Kids. Metode belajar interaktif yang membuat anak percaya diri berbicara bahasa Inggris sejak dini.
            </p>
            <div class="flex gap-4">
                <button class="bg-brand-red bg-gradient-to-r from-brand-red to-brand-terra text-white px-8 py-3 rounded-xl font-extrabold shadow-2xl shadow-brand-red/50 hover:shadow-brand-brown/50 transition transform hover:scale-105">
                    Start Learning
                </button>
            </div>
        </div>
        <div class="relative flex justify-center items-center">
            <div class="absolute -top-10 -right-10 w-90 h-128 bg-brand-orange opacity-20 rounded-full blur-3xl"></div>

            <img src="{{ asset('images/1.jpg') }}" 
                alt="Happy Kids Learning English"
                class="w-full h-auto object-cover relative z-10 rounded-3xl shadow-2xl border-4 border-white">
        </div>
    </div>
</section>