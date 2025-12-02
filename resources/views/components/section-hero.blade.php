<header class="bg-white/80 backdrop-blur-md w-auto h-16 shadow-sm sticky top-0 z-50 border-b border-gray-100 transition-all duration-300">
    <div class="container mx-auto px-4 py-2 flex justify-between items-center relative">

    <!-- Logo dengan background bulatan modern -->
    <div class="flex items-center gap-3 relative">
        <!-- Bulatan glow modern di belakang logo -->
        <div class="absolute -inset-2 w-14 h-14 bg-gradient-to-br from-brand-orange/30 via-brand-red/20 to-brand-terra/20 rounded-full blur-3xl -z-10 animate-pulse-slow absolute inset-0 bg-gradient-to-r from-orange-300 via-red-300 to-amber-200"></div>
        <div class="absolute -inset-3 w-16 h-16 bg-gradient-to-tl from-brand-red/10 via-white/20 to-brand-orange/10 rounded-full blur-2xl -z-20"></div>

        <div class="w-10 h-10 flex items-center justify-center overflow-hidden rounded-xl shadow-md relative z-10 bg-white/30 backdrop-blur-sm">
            <img src="{{ asset('images/Logo.png') }}" 
                alt="Logo" 
                class="w-8 h-8 object-contain">
        </div>

        <span class="text-lg font-extrabold text-brand-brown tracking-tight flex items-center gap-1 relative z-10">
            EnglishCafe<span class="text-brand-red">Kids</span>
        </span>
    </div>

    <!-- Navigasi desktop -->
    <nav class="hidden md:flex space-x-6 font-semibold main-nav relative z-10">
        <a href="#home-section" class="nav-item-modern">Beranda</a>
        <a href="#features-section" class="nav-item-modern">Fitur</a>
        <a href="#benefit-section" class="nav-item-modern">Manfaat</a>
        <a href="#program-section" class="nav-item-modern">Program</a>
        <a href="#package-section" class="nav-item-modern">Paket</a>
    </nav>

    <!-- Tombol menu mobile -->
    <button id="mobile-menu-button" 
        class="md:hidden text-brand-brown focus:outline-none text-xl transition hover:scale-110 active:scale-95 relative z-10">
        <i class="fas fa-bars"></i>
    </button>
</div>

    <nav id="mobile-menu" class="hidden md:hidden bg-white/80 backdrop-blur-lg border-t border-gray-200 py-2 mobile-nav transition-all duration-300">
        <ul class="flex flex-col space-y-2 px-4 pb-1 font-medium text-sm">
            <li><a href="#home-section" class="mobile-link">Beranda</a></li>
            <li><a href="#features-section" class="mobile-link">Fitur</a></li>
            <li><a href="#benefit-section" class="mobile-link">Manfaat</a></li>
            <li><a href="#program-section" class="mobile-link">Program</a></li>
            <li><a href="#package-section" class="mobile-link">Paket</a></li>
        </ul>
    </nav>
</header>


<!-- HERO SECTION 🚀 -->
<section id="home-section" class="relative overflow-hidden">

    <!-- 🔥 Background Gradient & Glow -->
    <div class="absolute inset-0 z-0">
        <!-- Gradasi horizontal -->
        <div class="absolute inset-0 bg-gradient-to-r from-orange-300 via-red-300 to-amber-200 opacity-40"></div>
        <!-- Glow blur besar -->
        <div class="absolute -top-40 -left-40 w-[500px] h-[500px] rounded-full bg-orange-400 opacity-30 blur-3xl"></div>
        <div class="absolute -bottom-40 -right-40 w-[600px] h-[600px] rounded-full bg-red-400 opacity-25 blur-3xl"></div>
        <div class="absolute top-[200px] right-[250px] w-[350px] h-[350px] rounded-full bg-amber-300 opacity-20 blur-3xl"></div>
    </div>

    <!-- 🔥 Background Blobs Modern -->
    <div class="absolute top-[-120px] left-[-80px] w-[400px] h-[400px] bg-brand-orange/20 rounded-full blur-3xl z-10"></div>
    <div class="absolute bottom-[-150px] right-[-100px] w-[450px] h-[450px] bg-brand-red/20 rounded-full blur-3xl z-10"></div>
    <div class="absolute top-[200px] right-[200px] w-[300px] h-[300px] bg-brand-terra/10 rounded-full blur-3xl z-10"></div>

    <!-- Dot Pattern Tipis -->
    <svg class="absolute inset-0 w-full h-full -z-20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
        <defs>
            <pattern id="dotPattern" x="0" y="0" width="24" height="24" patternUnits="userSpaceOnUse">
                <circle cx="2" cy="2" r="1" fill="rgba(125,38,46,0.06)" />
            </pattern>
        </defs>
        <rect width="100%" height="100%" fill="url(#dotPattern)" opacity="0.05"></rect>
    </svg>

    <div class="container mx-auto px-6 py-16 md:py-24 grid md:grid-cols-2 gap-12 items-center relative z-20">

        <!-- TEXT -->
        <div class="animate-fadeInSlow">
            <span class="inline-block py-1 px-3 rounded-full border border-brand-orange text-brand-orange text-sm font-bold mb-4 bg-white shadow-sm">
                🚀 Belajar Seru
            </span>

            <h1 class="text-4xl md:text-6xl font-extrabold text-brand-brown leading-tight mb-6">
                Berbicara Bahasa Inggris itu 
                <span class="text-brand-red">Seru</span> & 
                <span class="text-brand-orange">Mudah!</span>
            </h1>

            <p class="text-lg text-gray-500 mb-8 leading-relaxed">
                Bergabunglah dengan English Cafe Kids. Metode belajar interaktif yang membuat anak percaya diri berbicara bahasa Inggris sejak dini.
            </p>

            <a href="#program-section" class="inline-block bg-brand-orange text-white font-bold px-6 py-3 rounded-full shadow-lg hover:bg-brand-terra transition transform hover:scale-105 active:scale-95">
                Mulai Sekarang
            </a>
        </div>

        <!-- IMAGE -->
        <div class="relative flex justify-center items-center animate-float">
            <div class="absolute -top-10 -right-10 w-80 h-80 bg-brand-orange opacity-20 rounded-full blur-3xl"></div>

            <img src="{{ asset('images/1.jpg') }}" 
                 alt="Anak Gembira Belajar Bahasa Inggris"
                 class="w-full max-w-lg h-auto object-cover relative z-10 rounded-3xl shadow-2xl border-4 border-white transform hover:scale-[1.03] transition duration-300">
        </div>
    </div>

</section>

<style>
    /* Animasi pulse halus untuk bulatan logo */
    @keyframes pulse-slow {
        0%, 100% { transform: scale(1); opacity: 0.7; }
        50% { transform: scale(1.1); opacity: 0.5; }
    }
    .animate-pulse-slow {
        animation: pulse-slow 4s ease-in-out infinite;
    }
</style>


<!-- STYLE TAMBAHAN -->
<style>
    /* NAVBAR LINK MODERN */
    .nav-item-modern {
        @apply text-gray-600 hover:text-brand-orange transition relative group;
    }
    .nav-item-modern::after {
        content: "";
        @apply absolute left-0 bottom-[-3px] w-0 h-[2px] bg-brand-orange rounded-full transition-all duration-300;
    }
    .nav-item-modern:hover::after {
        @apply w-full;
    }

    /* MOBILE LINK */
    .mobile-link {
        @apply block py-1 hover:text-brand-orange transition;
    }

    /* Fade In Animation */
    .animate-fadeInSlow {
        animation: fadeIn 1.2s ease-out;
    }
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    /* Floating Image */
    .animate-float {
        animation: float 4s ease-in-out infinite;
    }
    @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
    }

    /* Fade In Animation */
    .animate-fadeInSlow {
        animation: fadeIn 1.2s ease-out;
    }
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    /* Floating Image */
    .animate-float {
        animation: float 4s ease-in-out infinite;
    }
    @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
    }
</style>