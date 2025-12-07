<section id="gallery-section" class="py-20 relative overflow-hidden">
    
    <div class="absolute inset-0 bg-brand-brown -z-10">
        <div class="absolute inset-0 bg-repeat opacity-10" style="background-image: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIHZpZXdCb3g9IjAgMCAyNCAyNCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48Y2lyY2xlIGN4PSIyIiBjeT0iMiIgcj0iMSIgZmlsbD0icmdoYShhbiwyNTUsIDI1NSwgMjU1LCAwLjIyIi8+PC9zdmc+')"></div>
        
        <div class="absolute -top-10 -left-10 w-96 h-96 bg-brand-orange/10 rounded-full blur-3xl hidden md:block"></div>
        <div class="absolute -bottom-10 -right-10 w-80 h-80 bg-brand-red/10 rounded-full blur-3xl opacity-70"></div>
        <div class="absolute top-[40%] left-[20%] w-64 h-64 bg-brand-terra/15 rounded-full blur-3xl"></div>
    </div>
    
    <div class="container mx-auto px-6 text-center mb-16 relative z-10">
        <h2 class="text-4xl md:text-5xl font-black text-white leading-tight">
            Momen <span class="text-brand-orange">Kegembiraan</span> di Setiap Kelas!
        </h2>
    </div>
    
    <div class="container mx-auto px-6 relative z-10"> 
        
        <div class="relative p-8 md:p-16 rounded-3xl 
                    bg-white/80 backdrop-blur-md 
                    shadow-[0_25px_60px_rgba(0,0,0,0.4)] 
                    ring-8 ring-brand-orange/30 border-4 border-white transition-all duration-300">
        
            <div class="relative w-full overflow-hidden mb-0 flex justify-center">
                
                <button id="prev-slide" class="absolute left-4 top-1/2 z-20 -translate-y-1/2 
                        bg-white/70 hover:bg-white text-brand-brown text-2xl p-4 rounded-full shadow-lg 
                        transition hover:scale-110 active:scale-90 hidden lg:flex items-center justify-center">
                    <i class="fas fa-chevron-left"></i>
                </button>
                
                
                <div class="carousel-3d-stack-container w-full max-w-xl h-80 md:h-96" tabindex="0">
                    <div id="image-carousel-stack" class="carousel-3d-stack-track" style="width: 100%;"> 
                        
                        
                        <div class="carousel-stack-item shadow-2xl rounded-[2rem] overflow-hidden border-4 border-white transition duration-300">
                            <img src="https://images.unsplash.com/photo-1544717305-2782549b5136?auto=format&fit=crop&w=800&q=80" alt="Anak-anak belajar 1" class="w-full h-full object-cover">
                        </div>
                        <div class="carousel-stack-item shadow-2xl rounded-[2rem] overflow-hidden border-4 border-white transition duration-300">
                            <img src="{{ asset('images/kids2.png') }}" alt="Anak-anak belajar 2" class="w-full h-full object-cover">
                        </div>
                        <div class="carousel-stack-item shadow-2xl rounded-[2rem] overflow-hidden border-4 border-white transition duration-300">
                            <img src="{{ asset('images/1.jpg') }}" alt="Anak-anak belajar 3" class="w-full h-full object-cover">
                        </div>
                        <div class="carousel-stack-item shadow-2xl rounded-[2rem] overflow-hidden border-4 border-white transition duration-300">
                            <img src="{{ asset('images/kids.png') }}" alt="Anak-anak belajar 4" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>
                
                <button id="next-slide" class="absolute right-4 top-1/2 z-20 -translate-y-1/2 
                        bg-white/70 hover:bg-white text-brand-brown text-2xl p-4 rounded-full shadow-lg 
                        transition hover:scale-110 active:scale-90 hidden lg:flex items-center justify-center">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
            
        </div>
        
    </div>
</section>