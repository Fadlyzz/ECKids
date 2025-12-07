<header class="bg-white/50 backdrop-blur-md w-auto h-16 shadow-lg sticky top-0 z-50 border-b-2 border-brand-orange/20 transition-all duration-300">
    <div class="container mx-auto px-4 py-2 flex justify-between items-center relative">

    <div class="flex items-center gap-3 relative transition transform hover:scale-105 duration-300">
        <div class="absolute -inset-2 w-14 h-14 bg-gradient-to-br from-brand-orange/40 via-brand-red/30 to-brand-terra/30 rounded-full blur-3xl -z-10 animate-pulse-slow"></div>
        <div class="absolute -inset-3 w-16 h-16 bg-gradient-to-tl from-brand-red/50 via-white/40 to-brand-orange/50 rounded-full blur-2xl -z-20"></div>

        <div class="w-11 h-11 flex items-center justify-center overflow-hidden rounded-xl shadow-xl relative z-10 bg-white ring-2 ring-brand-orange/50">
            <img src="{{ asset('images/Logo.png') }}" 
                alt="Logo" 
                class="w-9 h-9 object-contain">
        </div>

        <span class="text-xl font-black text-brand-brown tracking-tighter flex items-center gap-1 relative z-10">
            EnglishCafe<span class="text-brand-red">Kids</span>
        </span>
    </div>

    <nav class="hidden md:flex space-x-8 font-extrabold main-nav relative z-10">
        <a href="#home-section" class="nav-item-modern">Beranda</a>
        <a href="#about-section" class="nav-item-modern">Tentang</a>
        <a href="#program-section" class="nav-item-modern">Program</a>
        <a href="#gallery-section" class="nav-item-modern">Galeri</a>
        <a href="#benefits-section" class="nav-item-modern">Keuntungan</a>
        
        <div class="relative" x-data="{ open: false }" @click.outside="open = false">
            <button @click="open = !open" 
                class="nav-item-modern button-pricing flex items-center gap-1">
                Paket
                <i class="fas fa-chevron-down text-xs transition-transform duration-300" 
                   :class="{ 'rotate-180': open }"></i>
            </button>

            <div x-show="open" 
                 x-transition:enter="transition ease-out duration-200"
                 x-transition:enter-start="opacity-0 scale-95"
                 x-transition:enter-end="opacity-100 scale-100"
                 x-transition:leave="transition ease-in duration-75"
                 x-transition:leave-start="opacity-100 scale-100"
                 x-transition:leave-end="opacity-0 scale-95"
                 class="absolute right-0 mt-3 w-44 origin-top-right rounded-xl 
                        shadow-2xl shadow-brand-red/50  
                        bg-white/50 backdrop-blur-lg 
                        ring-1 ring-white/50 focus:outline-none p-2 z-40">
                
                <div class="absolute top-0 left-0 w-full h-[5px] bg-brand-red/50 rounded-t-xl opacity-70"></div>
                
                <a href="#regular-section" class="relative block px-3 py-2 text-sm font-semibold text-brand-brown rounded-lg hover:bg-white/50 transition duration-150 mt-1">
                    <i class="fas fa-users w-4 mr-2 text-brand-orange"></i> Regular Class
                </a>
                <a href="#private-section" class="block px-3 py-2 text-sm font-semibold text-brand-brown rounded-lg hover:bg-white/50 transition duration-150">
                    <i class="fas fa-user-circle w-4 mr-2 text-brand-red"></i> Private Class
                </a>
                <a href="#fullhouse-section" class="block px-3 py-2 text-sm font-semibold text-brand-brown rounded-lg hover:bg-white/50 transition duration-150">
                    <i class="fas fa-home w-4 mr-2 text-brand-terra"></i> Full House
                </a>
            </div>
        </div>
        </nav>

    <button id="mobile-menu-button" 
        class="md:hidden text-brand-orange focus:outline-none text-2xl transition hover:scale-125 active:scale-90 relative z-10 p-1">
        <i class="fas fa-bars"></i>
    </button>
</div>

    <nav id="mobile-menu" class="hidden md:hidden bg-white/15 backdrop-blur-lg border-t border-brand-orange/50 py-3 mobile-nav transition-all duration-300">
        <ul class="flex flex-col space-y-3 px-6 pb-2 font-black text-lg">
            <li><a href="#home-section" class="mobile-link">Beranda</a></li>
            <li><a href="#about-section" class="mobile-link">tentang</a></li>
            <li><a href="#program-section" class="mobile-link">Program</a></li>
            <li><a href="#gallery-section" class="mobile-link">Galeri</a></li>
            <li><a href="#benefits-section" class="mobile-link">Keuntungan</a></li>
            
            <li x-data="{ mobileOpen: false }" class="relative">
                <button @click="mobileOpen = !mobileOpen" 
                    class="mobile-link w-full text-left flex justify-between items-center !py-0">
                    Paket
                    <i class="fas fa-chevron-down text-sm transition-transform duration-300" 
                       :class="{ 'rotate-180': mobileOpen }"></i>
                </button>
                
                <ul x-show="mobileOpen" 
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 -translate-y-2"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave-end="opacity-0 -translate-y-2"
                    class="flex flex-col space-y-2 pl-4 pt-2 pb-1 text-base font-semibold border-l-4 border-brand-orange/50 ml-1">
                    
                    <li>
                        <a href="#regular-section" class="block py-1 text-brand-brown hover:text-brand-orange transition flex items-center">
                            <i class="fas fa-users w-4 mr-2 text-brand-orange"></i> Regular Class
                        </a>
                    </li>
                    <li>
                        <a href="#private-section" class="block py-1 text-brand-brown hover:text-brand-orange transition flex items-center">
                            <i class="fas fa-user-circle w-4 mr-2 text-brand-red"></i> Private Class
                        </a>
                    </li>
                    <li>
                        <a href="#fullhouse-section" class="block py-1 text-brand-brown hover:text-brand-orange transition flex items-center">
                            <i class="fas fa-home w-4 mr-2 text-brand-terra"></i> Full House
                        </a>
                    </li>
                </ul>
            </li>
            </ul>
    </nav>
</header>


<section id="home-section" class="relative overflow-hidden py-24 md:py-32">

    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-r from-orange-300 via-red-300 to-amber-200 opacity-40"></div>
        <div class="absolute -top-40 -left-40 w-[500px] h-[500px] rounded-full bg-orange-400 opacity-30 blur-3xl"></div>
        <div class="absolute -bottom-40 -right-40 w-[600px] h-[600px] rounded-full bg-red-400 opacity-25 blur-3xl"></div>
        <div class="absolute top-[200px] right-[250px] w-[350px] h-[350px] rounded-full bg-amber-300 opacity-20 blur-3xl"></div>
    </div>

    <div class="absolute top-[-120px] left-[-80px] w-[400px] h-[400px] bg-brand-orange/20 rounded-full blur-3xl z-10"></div>
    <div class="absolute bottom-[-150px] right-[-100px] w-[450px] h-[450px] bg-brand-red/20 rounded-full blur-3xl z-10"></div>
    <div class="absolute top-[200px] right-[200px] w-[300px] h-[300px] bg-brand-terra/10 rounded-full blur-3xl z-10"></div>

    <svg class="absolute inset-0 w-full h-full -z-20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
        <defs>
            <pattern id="dotPattern" x="0" y="0" width="24" height="24" patternUnits="userSpaceOnUse">
                <circle cx="2" cy="2" r="1" fill="rgba(125,38,46,0.06)" />
            </pattern>
        </defs>
        <rect width="100%" height="100%" fill="url(#dotPattern)" opacity="0.05"></rect>
    </svg>

    <div class="container mx-auto px-6 grid md:grid-cols-2 gap-12 items-center relative z-20">

        <div class="animate-fadeInSlow">
            <span class="inline-block py-1.5 px-4 rounded-3xl bg-brand-red text-white text-sm font-extrabold mb-5 shadow-lg shadow-brand-orange/40 transform hover:scale-[1.05] transition duration-300 cursor-default">
                🎉 BELAJAR SERU BARENG
            </span>

            <h1 class="text-5xl md:text-7xl font-black text-brand-brown leading-tight mb-6">
                Berbicara Bahasa Inggris itu 
                <span class="text-brand-red inline-block transform hover:scale-105 transition duration-200">Seru</span> & 
                <span class="text-brand-orange inline-block transform hover:scale-105 transition duration-200">Mudah!</span>
            </h1>

            <p class="text-lg text-gray-600 mb-10 leading-relaxed">
                Bergabunglah dengan English Cafe Kids. Metode belajar interaktif yang membuat anak percaya diri berbicara bahasa Inggris sejak dini.
            </p>

            <a href="#program-section" class="inline-block bg-brand-red text-white font-extrabold text-lg px-8 py-4 rounded-full shadow-2xl shadow-brand-orange/50 transition duration-300 transform hover:scale-105 hover:bg-brand-red active:scale-95 group relative overflow-hidden">
                Daftar<i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition duration-300"></i>
            </a>
        </div>

        <div class="relative flex justify-center items-center animate-float">
            <div class="absolute -top-10 -right-10 w-80 h-80 bg-brand-orange opacity-20 rounded-full blur-3xl"></div>

            <img src="{{ asset('images/1.jpg') }}" 
                 alt="Anak Gembira Belajar Bahasa Inggris"
                 class="w-full max-w-lg h-auto object-cover relative z-10 rounded-[3rem] shadow-[0_25px_60px_rgba(126,38,46,0.2)] border-8 border-white transform hover:scale-[1.03] transition duration-300">
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

    /* NAVBAR LINK MODERN */
    .nav-item-modern {
        /* Memperkuat font weight */
        @apply text-brand-brown hover:text-brand-orange transition relative group;
    }
    .nav-item-modern::after {
        content: "";
        /* Underline yang lebih tebal dan turun */
        @apply absolute left-0 bottom-[-5px] w-0 h-[3px] bg-brand-orange rounded-full transition-all duration-300;
    }
    .nav-item-modern:hover::after {
        @apply w-full;
    }
    /* Style khusus untuk tombol Paket di Nav */
    .button-pricing {
        @apply bg-brand-red text-white py-1.5 px-3 rounded-full shadow-md hover:bg-brand-brown transition transform hover:scale-105;
    }
    .button-pricing:hover::after {
        @apply w-0; /* Menonaktifkan underline pada tombol */
    }

    /* MOBILE LINK */
    .mobile-link {
        @apply block py-1.5 font-bold text-brand-brown hover:text-brand-orange transition;
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