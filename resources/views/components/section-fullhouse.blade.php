<section id="fullhouse-section" class="relative overflow-hidden py-16 md:py-24 bg-brand-brown">
    
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-r from-brand-terra/10 via-brand-orange/10 to-brand-red/10 opacity-60"></div>
        <div class="absolute -top-40 -left-40 w-[500px] h-[500px] rounded-full bg-brand-terra/20 opacity-30 blur-3xl"></div>
        <div class="absolute -bottom-40 -right-40 w-[600px] h-[600px] rounded-full bg-brand-red/20 opacity-25 blur-3xl"></div>
    </div>
    
    <svg class="absolute inset-0 w-full h-full -z-20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
        <defs>
            <pattern id="dotPatternFullhouse" x="0" y="0" width="24" height="24" patternUnits="userSpaceOnUse">
                <circle cx="2" cy="2" r="1" fill="rgba(255,255,255,0.08)" /> 
            </pattern>
        </defs>
        <rect width="100%" height="100%" fill="url(#dotPatternFullhouse)" opacity="0.1"></rect>
    </svg>

    <div class="container mx-auto px-6 grid md:grid-cols-2 gap-12 items-center relative z-20">
        
        <div class="relative flex justify-center items-center animate-float order-2 md:order-1">
            <div class="absolute -top-10 -left-10 w-80 h-80 bg-brand-terra opacity-20 rounded-full blur-3xl"></div>
            
            <img src="{{ asset('images/fullhouse.jpg') }}" 
                 alt="Siswa belajar Bahasa Inggris di rumah"
                 class="w-full max-w-lg h-auto object-cover relative z-10 
                        rounded-[3rem] shadow-[0_25px_60px_rgba(0,0,0,0.4)] 
                        border-8 border-white 
                        transform hover:scale-[1.03] transition duration-300">
        </div>
        
        <div class="animate-fadeInSlow order-1 md:order-2">
            
            <span class="inline-block py-1.5 px-4 rounded-3xl bg-brand-red text-white text-sm font-extrabold mb-5 shadow-lg shadow-brand-red/40 transform hover:scale-[1.05] transition duration-300 cursor-default">
                🏠 FULL HOUSE CLASS
            </span>

            <h2 class="text-4xl md:text-5xl font-black text-white leading-tight mb-6">
                Belajar Tenang di Rumah, 
                <span class="text-brand-orange inline-block transform hover:scale-105 transition duration-200">Hasil Maksimal!</span>
            </h2>

            <p class="text-lg text-gray-200 mb-10 leading-relaxed">
                Belajar bahasa Inggris di rumah? Bisa banget! Untuk kamu yang sedang mencari kursus bahasa Inggris di rumah, di kantor, dimanapun, English Cafe siap membantu. Program ini sama seperti private, tapi Chef (tutor) English Cafe datang kerumah.
            </p>

            <a href="#pricing-section" class="inline-block bg-brand-red text-white font-extrabold text-lg px-8 py-4 rounded-full shadow-2xl shadow-brand-red/40 transition duration-300 transform hover:scale-105 hover:bg-brand-orange active:scale-95 group relative overflow-hidden">
                Daftar <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition duration-300"></i>
            </a>
        </div>


    </div>
</section>