<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }} " class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>English Cafe Kids</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <script src="https://cdn.tailwindcss.com"></script>
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

        /* Kelas yang akan ditambahkan oleh JS */
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

        /* Di mobile, hapus 3D agar terlihat stabil */
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
        // Fungsi untuk memastikan halaman selalu mulai dari atas saat di-reload
        function clearHashOnLoad() {
            if (window.location.hash) {
                // Menghapus hash dari URL
                history.replaceState('', document.title, window.location.pathname + window.location.search);
                
                // Memaksa scroll ke atas
                setTimeout(() => {
                    window.scrollTo(0, 0); 
                }, 0); 
            }
        }

        // Panggil fungsi saat seluruh halaman telah dimuat.
        window.onload = clearHashOnLoad;

        document.addEventListener('DOMContentLoaded', () => {
            // --- START: MOBILE MENU LOGIC ---
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            const mobileNavLinks = document.querySelectorAll('.mobile-nav a'); 

            if (mobileMenuButton && mobileMenu) {
                // Toggle visibility menu mobile
                mobileMenuButton.addEventListener('click', () => {
                    mobileMenu.classList.toggle('hidden'); 
                });

                // Tutup menu mobile saat link diklik
                mobileNavLinks.forEach(link => {
                    link.addEventListener('click', () => {
                        mobileMenu.classList.add('hidden');
                    });
                });
            }
            // --- END: MOBILE MENU LOGIC ---

            // --- START: CAROUSEL 3D STACK LOGIC ---
            const track = document.getElementById('image-carousel-stack');
            const prevButton = document.getElementById('prev-slide');
            const nextButton = document.getElementById('next-slide');
            
            if (track) { 
                const items = track.querySelectorAll('.carousel-stack-item');
                const totalItems = items.length;
                let currentIndex = 0;
                const slideInterval = 5000; 
                let autoSlide = setInterval(nextSlide, slideInterval);

                // Mengupdate kelas CSS untuk menampilkan slide saat ini dan slide tetangga
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

                function nextSlide() { 
                    goToSlide(currentIndex + 1); 
                    resetAutoSlide();
                }

                function prevSlide() { 
                    goToSlide(currentIndex - 1); 
                    resetAutoSlide();
                }
                
                // Mereset interval auto slide
                function resetAutoSlide() {
                    clearInterval(autoSlide);
                    autoSlide = setInterval(nextSlide, slideInterval);
                }

                // Event Listeners untuk tombol navigasi
                if(prevButton && nextButton) {
                    prevButton.addEventListener('click', prevSlide);
                    nextButton.addEventListener('click', nextSlide);
                }
                
                // Touch/Swipe Logic untuk Mobile
                let touchStartX = 0;
                let touchEndX = 0;
                const minSwipeDistance = 50; 
                
                track.addEventListener('touchstart', (e) => {
                    touchStartX = e.touches[0].clientX;
                });
                
                track.addEventListener('touchmove', (e) => {
                    // Mencegah scroll halaman saat melakukan swipe pada carousel
                    e.preventDefault(); 
                });
                
                track.addEventListener('touchend', (e) => {
                    if (e.changedTouches.length > 0) {
                        touchEndX = e.changedTouches[0].clientX;

                        const deltaX = touchEndX - touchStartX;

                        if (Math.abs(deltaX) > minSwipeDistance) {
                            if (deltaX > 0) {
                                // Geser ke Kanan (Previous Slide)
                                prevSlide();
                            } else {
                                // Geser ke Kiri (Next Slide)
                                nextSlide();
                            }
                        }
                    }
                });
                // END: Touch/Swipe Logic

                // Inisialisasi tampilan awal carousel
                updateCarousel();
            }
            // --- END: CAROUSEL 3D STACK LOGIC ---
            
            // --- START: SCROLLSPY/ACTIVE NAV LINK LOGIC ---
            const sections = document.querySelectorAll('section[id]');
            // Menggabungkan navLinks dan mobileNavLinks
            const allNavLinks = [...document.querySelectorAll('.main-nav a'), ...document.querySelectorAll('.mobile-nav a')]; 
            
            // Offset untuk sticky header
            const offset = 100; 

            // Mengupdate link navigasi yang aktif berdasarkan posisi scroll
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
                    // Reset link
                    link.classList.remove('text-brand-orange');
                    link.classList.add('text-gray-600'); 

                    const linkHrefId = link.getAttribute('href').substring(1);
                    
                    // Aktifkan link yang sesuai
                    if (linkHrefId === currentId) {
                        link.classList.remove('text-gray-600');
                        link.classList.add('text-brand-orange');
                    }
                });
            }

            // Jalankan fungsi saat gulir dan saat halaman dimuat
            window.addEventListener('scroll', updateActiveLink);
            updateActiveLink(); 
            // --- END: SCROLLSPY/ACTIVE NAV LINK LOGIC ---
        });
    </script>
</head>
<body class="bg-white text-gray-700 antialiased font-sans">
    
    {{-- Tempat konten utama dimuat --}}
    @yield('content') 

</body>
</html>