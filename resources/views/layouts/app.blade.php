<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }} " class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>English Cafe Kids</title>
    <link rel="icon" href="{{ asset('images/Logo.png') }}" type="image/jpg">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Alpine.js for reactive toggle -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    {{-- Konfigurasi Tailwind Inline dengan Palet Warna Baru --}}
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'brand-brown': '#7E262E',      
                        'brand-orange': '#F58633',     
                        'brand-terra': '#B54D34',      
                        'brand-red': '#ED3338',        
                    },
                    fontFamily: {
                        sans: ['Montserrat', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <style>
        /* CSS Kustom untuk Efek 3D Stack/Tumpukan */
        .carousel-3d-stack-container {
            transform-style: preserve-3d;
            perspective: 800px;
            position: relative;
        }
        
        .carousel-3d-stack-track {
            position: relative;
            width: 100%;
            height: 100%;
            transition: transform 0.7s ease-out; 
        }
        
        .carousel-stack-item {
            position: absolute;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 0.7s ease-out, transform 0.7s ease-out;
            transform: translateZ(-200px) rotateY(-5deg); 
            cursor: pointer;
        }

        .is-current {
            opacity: 1;
            transform: translateZ(0) rotateY(0deg) scale(1);
            z-index: 10;
        }

        .is-prev {
            opacity: 0.7;
            transform: translateX(-15%) translateZ(-100px) rotateY(5deg) scale(0.95);
            z-index: 9;
        }

        .is-next {
            opacity: 0.7;
            transform: translateX(15%) translateZ(-100px) rotateY(-5deg) scale(0.95);
            z-index: 9;
        }

        @media (max-width: 768px) {
            .carousel-3d-stack-container, .carousel-3d-stack-track {
                transform-style: flat;
                perspective: none;
                height: 300px; 
            }
            .carousel-stack-item {
                position: static;
                opacity: 0;
                transform: none;
                transition: opacity 0.7s;
            }
            .carousel-stack-item.is-current {
                opacity: 1;
                position: absolute; 
                left: 0;
                top: 0;
            }
        }
    </style>

    <script>
        function clearHashOnLoad() {
            if (window.location.hash) {
                history.replaceState('', document.title, window.location.pathname + window.location.search);
                setTimeout(() => {
                    window.scrollTo(0, 0); 
                }, 0); 
            }
        }

        window.onload = clearHashOnLoad;

        document.addEventListener('DOMContentLoaded', () => {

            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            const mobileNavLinks = document.querySelectorAll('.mobile-nav a'); 

            if (mobileMenuButton && mobileMenu) {
                mobileMenuButton.addEventListener('click', () => {
                    mobileMenu.classList.toggle('hidden'); 
                });

                mobileNavLinks.forEach(link => {
                    link.addEventListener('click', () => {
                        mobileMenu.classList.add('hidden');
                    });
                });
            }

            const track = document.getElementById('image-carousel-stack');
            const prevButton = document.getElementById('prev-slide');
            const nextButton = document.getElementById('next-slide');
            
            if (track) { 
                const items = track.querySelectorAll('.carousel-stack-item');
                const totalItems = items.length;
                let currentIndex = 0;
                const slideInterval = 2000; 
                let autoSlide = setInterval(nextSlide, slideInterval);

                function updateCarousel() {
                    items.forEach((item, index) => {
                        item.classList.remove('is-current', 'is-prev', 'is-next');
                        let targetIndex = (index - currentIndex + totalItems) % totalItems;
                        
                        if (targetIndex === 0) {
                            item.classList.add('is-current');
                        } else if (targetIndex === 1) {
                            item.classList.add('is-next');
                        } else if (targetIndex === totalItems - 1) {
                            item.classList.add('is-prev');
                        }
                    });
                }

                function goToSlide(index) {
                    currentIndex = (index + totalItems) % totalItems;
                    updateCarousel();
                }

                function nextSlide() { goToSlide(currentIndex + 1); }
                function prevSlide() { goToSlide(currentIndex - 1); }

                function resetAutoSlide() {
                    clearInterval(autoSlide);
                    autoSlide = setInterval(nextSlide, slideInterval);
                }

                if(prevButton && nextButton) {
                    prevButton.addEventListener('click', () => { prevSlide(); resetAutoSlide(); });
                    nextButton.addEventListener('click', () => { nextSlide(); resetAutoSlide(); });
                }

                let touchStartX = 0;
                let touchEndX = 0;
                const minSwipeDistance = 50; 
                
                const container = document.querySelector('.carousel-3d-stack-container');
                
                track.addEventListener('touchstart', (e) => {
                    touchStartX = e.touches[0].clientX;
                    clearInterval(autoSlide);
                });
                
                track.addEventListener('touchend', (e) => {
                    if (e.changedTouches.length > 0) {
                        touchEndX = e.changedTouches[0].clientX;
                        const deltaX = touchEndX - touchStartX;

                        if (Math.abs(deltaX) > minSwipeDistance) {
                            if (deltaX > 0) prevSlide();
                            else nextSlide();
                        }
                        resetAutoSlide();
                    }
                });

                if (container) {
                    container.addEventListener('keydown', (e) => {
                        if (e.key === 'ArrowLeft') { prevSlide(); resetAutoSlide(); }
                        else if (e.key === 'ArrowRight') { nextSlide(); resetAutoSlide(); }
                    });
                }

                updateCarousel();
            }

            const sections = document.querySelectorAll('section[id]');
            const allNavLinks = [...document.querySelectorAll('.main-nav a'), ...document.querySelectorAll('.mobile-nav a')]; 
            const offset = 100; 

            function updateActiveLink() {
                let currentId = 'home-section'; 

                for (let i = sections.length - 1; i >= 0; i--) {
                    const section = sections[i];
                    const sectionTop = section.offsetTop;

                    if (window.scrollY >= sectionTop - offset) {
                        currentId = section.getAttribute('id');
                        break;
                    }
                }

                allNavLinks.forEach(link => {
                    link.classList.remove('text-brand-orange');
                    link.classList.add('text-gray-600'); 

                    const linkHrefId = link.getAttribute('href').substring(1);
                    
                    if (linkHrefId === currentId) {
                        link.classList.remove('text-gray-600');
                        link.classList.add('text-brand-orange');
                    }
                });
            }

            window.addEventListener('scroll', updateActiveLink);
            updateActiveLink(); 
        });
    </script>

     <style>
        @keyframes floatPulse {
            0% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0); }
        }

        .float-animate {
            animation: floatPulse 2.2s ease-in-out infinite;
        }
    </style>
</head>
<body class="bg-white text-gray-700 antialiased font-sans">
    
    {{-- Tempat konten utama dimuat --}}
    @yield('content') 


<!-- ===== WhatsApp Floating + Chat Popup ===== -->
<div x-data="{ open:false }" class="fixed bottom-6 right-6 z-50">

    <!-- POPUP CHAT -->
    <div 
        x-show="open" 
        x-transition.origin.bottom.right 
        class="absolute bottom-20 right-0 w-72 bg-white rounded-2xl shadow-2xl border border-gray-200 overflow-hidden"
    >
        <!-- Header -->
        <div class="bg-[#25D366] text-white p-4 flex gap-3 items-center">
            <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center">
                <!-- Android Style WhatsApp Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="#25D366">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.472-.148-.67.15-.197.297-.768.967-.94 1.166-.173.198-.347.223-.644.075-.297-.149-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.52.149-.173.198-.298.298-.497.099-.198.05-.372-.025-.521-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.501-.669-.51-.173-.009-.372-.011-.57-.011-.198 0-.52.074-.792.372-.272.298-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.873.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414-.074-.124-.272-.198-.57-.347z"/>
                    <path fill="#25D366" d="M11.995 2C6.475 2 2 6.475 2 11.995c0 2.21.62 4.18 1.685 5.757L2 22l4.403-1.546A9.953 9.953 0 0 0 11.995 22C17.515 22 22 17.525 22 12.005 22 6.475 17.515 2 11.995 2zm0 18.203c-1.726 0-3.372-.493-4.797-1.426l-.344-.218-2.612.916.87-2.55-.224-.354A8.178 8.178 0 0 1 3.81 12.01c0-4.48 3.654-8.135 8.185-8.135 4.503 0 8.168 3.654 8.168 8.135 0 4.48-3.665 8.193-8.168 8.193z"/>
                </svg>
            </div>

            <div>
                <p class="font-semibold text-lg leading-tight">English Cafe</p>
                <p class="text-sm opacity-90">Online</p>
            </div>
        </div>

        <!-- Message -->
        <div class="p-4">
            <div class="bg-gray-100 p-3 rounded-xl text-sm leading-relaxed text-gray-800 mb-3">
                Halo 👋<br>Butuh bantuan atau ingin konsultasi?
            </div>

            <a href="https://wa.me/62833893849389" target="_blank"
                class="block text-center bg-[#25D366] hover:bg-[#1EBE5C] text-white font-semibold py-3 rounded-xl transition-all">
                Mulai Chat Sekarang
            </a>
        </div>
    </div>

    <!-- BUTTON -->
    <button 
        @click="open = !open"
        class="w-14 h-14 rounded-full bg-[#25D366] shadow-lg hover:shadow-xl flex items-center justify-center transition-all duration-300 hover:scale-110 animate-[bounce_2s_infinite]"
    >
        <!-- Modern WhatsApp Icon -->
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="white">
            <path d="M20.52 3.48C18.24 1.2 15.24 0 12 0 5.38 0 .02 5.36.02 11.98c0 2.11.55 4.18 1.6 6.02L0 24l6.22-1.63c1.76.96 3.76 1.47 5.78 1.47h.01c6.62 0 12-5.36 12-11.97 0-3.24-1.26-6.24-3.48-8.52zM12 21.82h-.01c-1.79 0-3.54-.48-5.08-1.39l-.36-.22-3.69.97.99-3.59-.23-.37a9.775 9.775 0 01-1.52-5.24c0-5.39 4.39-9.78 9.79-9.78 2.61 0 5.06 1.02 6.91 2.87a9.71 9.71 0 012.87 6.9c0 5.39-4.39 9.78-9.77 9.78zm5.01-7.57c-.27-.14-1.59-.79-1.84-.88-.25-.09-.43-.14-.61.14-.18.27-.71.88-.87 1.06-.16.18-.32.21-.59.07-.27-.14-1.11-.41-2.12-1.3-.78-.68-1.31-1.52-1.47-1.78-.15-.27-.02-.42.12-.55.13-.12.27-.31.4-.46.13-.16.18-.27.27-.45.09-.18.04-.34-.02-.48-.07-.14-.62-1.5-.85-2.05-.23-.54-.46-.47-.63-.48a14.5 14.5 0 00-.55-.01c-.19 0-.5.07-.75.35-.25.27-1 1-1 2.43 0 1.43 1.05 2.81 1.19 3 .14.18 2.08 3.18 5.05 4.46.7.3 1.24.47 1.66.6.7.22 1.33.19 1.83.12.57-.08 1.76-.72 2.01-1.42.25-.69.25-1.26.18-1.38-.08-.12-.26-.19-.54-.33z"/>
        </svg>
    </button>
</div>




</body>

</html>
