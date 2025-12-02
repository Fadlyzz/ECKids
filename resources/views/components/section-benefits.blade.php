<style>
    /* CSS Kustom untuk menyembunyikan Scrollbar */
    .hide-scrollbar {
        -ms-overflow-style: none;  /* IE dan Edge */
        scrollbar-width: none;  /* Firefox */
    }

    .hide-scrollbar::-webkit-scrollbar {
        display: none; /* Chrome, Safari and Opera */
    }
    
    /* Memastikan track terlihat jelas di mobile dengan padding yang cukup */
    #benefit-track {
        padding-top: 1rem;
        padding-bottom: 1rem;
    }

    /* Style dasar kartu saat tidak aktif */
    .benefit-card {
        transform-origin: center;
        /* Transisi hanya untuk bayangan/shadow */
        transition: box-shadow 0.3s ease-in-out; 
    }
</style>

<section id="benefit-section" class="relative py-20 overflow-hidden">
    <!-- Background gradasi dan glow -->
    <div class="absolute top-0 left-0 w-full h-full -z-20 bg-gradient-to-tr from-brand-orange/20 via-brand-red/20 to-brand-terra/10"></div>
    <div class="absolute -top-32 -left-32 w-96 h-96 bg-brand-orange/20 rounded-full blur-3xl -z-10"></div>
    <div class="absolute -bottom-32 -right-32 w-[28rem] h-[28rem] bg-brand-red/20 rounded-full blur-3xl -z-10"></div>
    <div class="absolute top-1/3 right-1/4 w-72 h-72 bg-brand-terra/10 rounded-full blur-3xl -z-10"></div>

    <div class="container mx-auto px-6">
        <div class="w-full py-10 text-center max-w-2xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-brand-brown">Manfaat</h2>
        </div>

        <div class="relative mt-10">
            <button id="prev-benefit" class="absolute left-0 top-1/2 z-20 -translate-y-1/2 -ml-3 
                                            bg-white/90 hover:bg-white text-brand-brown p-3 rounded-full 
                                            shadow-xl transition hidden md:block border border-gray-200">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>

            <div id="benefit-track" class="flex gap-8 overflow-x-scroll snap-x snap-mandatory pb-4 px-6 -mx-6
                                        relative cursor-grab active:cursor-grabbing focus:outline-none hide-scrollbar" 
                                        tabindex="0">
                
                <!-- Kartu 1 -->
                <div class="benefit-card snap-center flex-shrink-0 w-11/12 md:w-1/3 md:snap-start
                            bg-white p-8 rounded-2xl border border-gray-100 shadow-lg hover:shadow-xl transition text-center group">
                    <div class="w-20 h-20 mx-auto bg-brand-orange/10 text-brand-orange rounded-full 
                                flex items-center justify-center text-3xl mb-6 
                                group-hover:bg-brand-orange group-hover:text-white transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18.5 16c2 0 3.5-1.5 3.5-4s-1.5-4-3.5-4c-4 0-6.5 8-10.5 8-2 0-3.5-1.5-3.5-4s1.5-4 3.5-4c4 0 6.5 8 10.5 8z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-brand-brown">Gratis Mengulang Seumur Hidup</h3>
                    <p class="text-gray-500 text-base leading-relaxed">
                        GRATIS mengulang berlaku selamanya dan di seluruh cabang English Cafe di Indonesia.
                    </p>
                </div>

                <!-- Kartu 2 -->
                <div class="benefit-card snap-center flex-shrink-0 w-11/12 md:w-1/3 md:snap-start
                            bg-white p-8 rounded-2xl border border-gray-100 shadow-lg hover:shadow-xl transition text-center group">
                    <div class="w-20 h-20 mx-auto bg-brand-orange/10 text-brand-orange rounded-full 
                                flex items-center justify-center text-3xl mb-6 
                                group-hover:bg-brand-orange group-hover:text-white transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="12" y1="1" x2="12" y2="23"></line>
                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-brand-brown">Garansi Uang Kembali 100%</h3>
                    <p class="text-gray-500 text-base leading-relaxed">
                        Mengembalikan uang jika kamu tidak bisa speaking dalam 2 bulan
                    </p>
                </div>

                <!-- Kartu 3 -->
                <div class="benefit-card snap-center flex-shrink-0 w-11/12 md:w-1/3 md:snap-start
                            bg-white p-8 rounded-2xl border border-gray-100 shadow-lg hover:shadow-xl transition text-center group">
                    <div class="w-20 h-20 mx-auto bg-brand-orange/10 text-brand-orange rounded-full 
                                flex items-center justify-center text-3xl mb-6 
                                group-hover:bg-brand-orange group-hover:text-white transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-brand-brown">Waktu dan Tempat Fleksibel</h3>
                    <p class="text-gray-500 text-base leading-relaxed">
                        Dimanapun dan kapanpun, English Cafe siap mendampingi sampai kamu bisa
                    </p>
                </div>

                <!-- Kartu 4 -->
                <div class="benefit-card snap-center flex-shrink-0 w-11/12 md:w-1/3 md:snap-start
                            bg-white p-8 rounded-2xl border border-gray-100 shadow-lg hover:shadow-xl transition text-center group">
                    <div class="w-20 h-20 mx-auto bg-brand-orange/10 text-brand-orange rounded-full 
                                flex items-center justify-center text-3xl mb-6 
                                group-hover:bg-brand-orange group-hover:text-white transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-brand-brown">Daftar 2 Gratis 1</h3>
                    <p class="text-gray-500 text-base leading-relaxed">
                        Ajak temanmu agar makin hemat sekaligus bisa latihan bareng
                    </p>
                </div>

                <!-- Kartu 5 -->
                <div class="benefit-card snap-center flex-shrink-0 w-11/12 md:w-1/3 md:snap-start
                            bg-white p-8 rounded-2xl border border-gray-100 shadow-lg hover:shadow-xl transition text-center group">
                    <div class="w-20 h-20 mx-auto bg-brand-orange/10 text-brand-orange rounded-full 
                                flex items-center justify-center text-3xl mb-6 
                                group-hover:bg-brand-orange group-hover:text-white transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                            <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-brand-brown">Gratis Modul & E-Sertifikat</h3>
                    <p class="text-gray-500 text-base leading-relaxed">
                        Kamu akan mendapatkan modul resmi dan sertifikat untuk menunjang karirmu
                    </p>
                </div>

            </div>

            <button id="next-benefit" class="absolute right-0 top-1/2 z-20 -translate-y-1/2 -mr-3 
                                            bg-white/90 hover:bg-white text-brand-brown p-3 rounded-full 
                                            shadow-xl transition hidden md:block border border-gray-200">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>
        </div>

        <div id="benefit-dots" class="flex justify-center mt-6 space-x-2"></div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        // PERBAIKAN 1: Paksa scroll ke atas (Beranda) setelah halaman selesai dimuat.
        setTimeout(() => {
            window.scrollTo(0, 0);
        }, 1); 

        const track = document.getElementById('benefit-track');
        const dotsContainer = document.getElementById('benefit-dots');
        const realCards = track.querySelectorAll('.benefit-card:not(.clone-first):not(.clone-last)');
        const prevButton = document.getElementById('prev-benefit');
        const nextButton = document.getElementById('next-benefit');
        
        if (!track || realCards.length === 0) return;

        const totalCards = realCards.length;
        let currentCardIndex = 0; 
        
        // isAutoScrolling: Bendera mutlak untuk mengabaikan event scroll saat animasi otomatis berjalan.
        let isAutoScrolling = false; 
        let autoSlideTimeout; 
        
        // --- 1. LOGIKA KLONING UNTUK LOOPING MULUS ---
        
        // Kloning kartu terakhir di awal, dan kartu pertama di akhir
        const lastCardClone = realCards[totalCards - 1].cloneNode(true);
        lastCardClone.classList.add('clone-last');
        track.prepend(lastCardClone);

        const firstCardClone = realCards[0].cloneNode(true);
        firstCardClone.classList.add('clone-first');
        track.appendChild(firstCardClone);
        
        const allCards = track.querySelectorAll('.benefit-card');
        
        // Indeks kartu nyata (kartu asli) dalam array allCards
        const REAL_START_INDEX = 1; 
        const REAL_END_INDEX = totalCards; // Indeks 1 sampai 6
        
        // Konstanta
        const SLIDE_INTERVAL = 3500; 
        // Durasi smooth scroll
        const SCROLL_DURATION = 500; 
        
        // UTILITAS: Fungsi untuk mendapatkan nilai scrollLeft agar kartu di tengah viewport
        function getScrollLeftForCenter(card) {
            if (!card) return 0;
            const trackWidth = track.clientWidth;
            const cardWidth = card.offsetWidth;
            // scrollLeft yang dibutuhkan untuk menempatkan kartu di tengah
            return card.offsetLeft - ((trackWidth - cardWidth) / 2);
        }

        // 1. Fungsi Kontrol Auto-Slide (Timeout Rekursif/Berantai)
        function startAutoSlide() {
            stopAutoSlide(); 
            
            // Jadwalkan slide berikutnya setelah jeda interval
            autoSlideTimeout = setTimeout(() => {
                const nextIndex = (currentCardIndex + 1) % totalCards;
                // Panggil scrollToCard dengan isFromAutoSlide=true
                scrollToCard(nextIndex, true, true); 
            }, SLIDE_INTERVAL);
        }

        function stopAutoSlide() {
            clearTimeout(autoSlideTimeout);
        }

        // 2. Fungsi untuk Scroll ke Kartu tertentu
        function scrollToCard(index, smooth = true, isFromAutoSlide = false) {
            const targetIndexInAllCards = index + REAL_START_INDEX; 
            const targetCard = allCards[targetIndexInAllCards];

            currentCardIndex = index; 
            
            if (smooth && isFromAutoSlide) {
                // Tetapkan bendera saat smooth scroll dimulai oleh timer
                isAutoScrolling = true;
            }

            const targetScrollLeft = getScrollLeftForCenter(targetCard);

            track.scrollTo({
                left: targetScrollLeft, 
                behavior: smooth ? 'smooth' : 'auto'
            });

            updateStyles(index);
            
            // PERBAIKAN UTAMA: Jika dipanggil oleh auto-slide, jadwalkan slide berikutnya
            if (isFromAutoSlide) {
                // Tunggu hingga animasi selesai (SCROLL_DURATION + buffer), lalu reset bendera dan mulai loop berikutnya
                setTimeout(() => {
                    isAutoScrolling = false; // Reset bendera setelah animasi selesai
                    
                    // Logika untuk melakukan teleportasi instan saat mencapai klon
                    if (index === totalCards - 1) { // Jika baru saja menavigasi ke kartu nyata terakhir (sebelum klon pertama)
                        // Lakukan teleportasi instan ke kartu nyata pertama
                        scrollToCard(0, false);
                    } else {
                        startAutoSlide(); // Panggilan rekursif untuk loop normal
                    }
                    
                }, SCROLL_DURATION + 50); 
            }
        }

        // 3. Perbarui Titik-titik (Dots) dan Styling Kartu 
        function updateStyles(activeIndex) {
            // Perbarui Titik-titik (Dots)
            dots.forEach((dot, index) => {
                dot.classList.toggle('bg-brand-orange', index === activeIndex);
                dot.classList.toggle('bg-gray-300', index !== activeIndex);
            });

            // Perbarui Gaya Kartu
            allCards.forEach((card, index) => {
                card.classList.remove('shadow-xl', 'z-10');
                card.classList.add('shadow-lg');
                
                if (index >= REAL_START_INDEX && index <= REAL_END_INDEX) {
                    const realCardIndex = index - REAL_START_INDEX; 
                    
                    if (realCardIndex === activeIndex) {
                        card.classList.remove('shadow-lg');
                        card.classList.add('shadow-xl', 'z-10'); 
                    } 
                }
            });
        }

        // 4. Inisialisasi Titik-titik (Dots)
        realCards.forEach((card, index) => {
            const dot = document.createElement('button');
            dot.classList.add('w-3', 'h-3', 'rounded-full', 'bg-gray-300', 'transition-colors', 'duration-300');
            dot.setAttribute('data-index', index);
            
            dot.addEventListener('click', () => {
                stopAutoSlide();
                scrollToCard(index);
                // Mulai timer baru setelah interaksi pengguna
                setTimeout(startAutoSlide, SLIDE_INTERVAL); 
            });
            
            dotsContainer.appendChild(dot);
        });
        
        const dots = dotsContainer.querySelectorAll('button');

        // 5. Listener untuk tombol panah
        if (prevButton && nextButton) {
            prevButton.addEventListener('click', () => {
                stopAutoSlide();
                const prevIndex = (currentCardIndex - 1 + totalCards) % totalCards;
                scrollToCard(prevIndex);
                setTimeout(startAutoSlide, SLIDE_INTERVAL);
            });

            nextButton.addEventListener('click', () => {
                stopAutoSlide();
                const nextIndex = (currentCardIndex + 1) % totalCards;
                scrollToCard(nextIndex);
                setTimeout(startAutoSlide, SLIDE_INTERVAL);
            });
        }

        // 6. Deteksi posisi scroll (Logika Looping Reset HANYA untuk scroll manual)
        track.addEventListener('scroll', () => {
            // PENTING: Abaikan event scroll jika sedang auto-scrolling
            if (isAutoScrolling) return; 

            // Scroll manual, hentikan timer.
            stopAutoSlide(); 
            
            // Posisi scroll yang seharusnya untuk kartu nyata pertama dan terakhir
            const centeredFirstCardPos = getScrollLeftForCenter(allCards[REAL_START_INDEX]);
            const centeredLastCardPos = getScrollLeftForCenter(allCards[REAL_END_INDEX]);
            
            // Posisi offset dari klon terakhir dan klon pertama
            const firstCloneOffset = getScrollLeftForCenter(allCards[REAL_END_INDEX + 1]); 
            const lastCloneOffset = getScrollLeftForCenter(allCards[REAL_START_INDEX - 1]); 
            
            // --- LOGIKA RESET INSTAN UNTUK LOOPING ---
            
            // Reset maju: Jika scroll melewati batas akhir (klon pertama di akhir)
            if (track.scrollLeft >= firstCloneOffset) {
                // Scroll instan ke kartu nyata pertama
                track.scrollLeft = centeredFirstCardPos; 
                // Karena ini scroll instan, kita harus memanggil updateStyles manual
                updateStyles(0);
                currentCardIndex = 0;
            } 
            
            // Reset mundur: Jika scroll melewati batas awal (klon terakhir di awal)
            else if (track.scrollLeft <= lastCloneOffset) {
                // Scroll instan ke kartu nyata terakhir
                track.scrollLeft = centeredLastCardPos;
                // Karena ini scroll instan, kita harus memanggil updateStyles manual
                updateStyles(totalCards - 1);
                currentCardIndex = totalCards - 1;
            }

            // Setelah scroll manual, kita hitung kartu yang paling dekat dengan pusat viewport
            
            track.isDragging = true;
            const checkScrollEnd = () => {
                const currentScroll = track.scrollLeft;
                setTimeout(() => {
                    if (track.scrollLeft === currentScroll) {
                        track.isDragging = false;
                        
                        // Hitung kartu terdekat saat scroll manual berhenti
                        let closestIndex = 0; 
                        let minDistance = Infinity;
                        const trackCenter = track.scrollLeft + (track.clientWidth / 2); 

                        for (let i = REAL_START_INDEX; i <= REAL_END_INDEX; i++) {
                            const card = allCards[i];
                            const cardCenter = card.offsetLeft + (card.offsetWidth / 2);
                            const distance = Math.abs(trackCenter - cardCenter);

                            if (distance < minDistance) {
                                minDistance = distance;
                                closestIndex = i - REAL_START_INDEX; 
                            }
                        }

                        if (closestIndex !== currentCardIndex) {
                            currentCardIndex = closestIndex;
                            updateStyles(currentCardIndex);
                        }

                        // Mulai kembali auto-slide setelah scroll manual (drag/swipe) berakhir
                        startAutoSlide(); 
                    } else {
                        // Belum berhenti, lanjutkan pengecekan
                        requestAnimationFrame(checkScrollEnd);
                    }
                }, 50); // Beri jeda kecil untuk memastikan tidak ada event scroll lagi
            };
            requestAnimationFrame(checkScrollEnd);
            
        });


        // 7. Jeda auto-slide saat interaksi hover/touch
        track.addEventListener('mouseenter', stopAutoSlide);
        track.addEventListener('mouseleave', startAutoSlide);
        track.addEventListener('touchstart', stopAutoSlide);
        
        // 8. Inisialisasi Awal
        // Scroll instan ke kartu nyata pertama (indeks 0) saat dimuat
        if (allCards[REAL_START_INDEX]) {
             scrollToCard(0, false); 
        }
        
        // Mulai auto-slide
        startAutoSlide(); 
    });
</script>