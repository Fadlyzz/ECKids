<section id="package-section" class="py-24 bg-white relative">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <span class="text-brand-orange font-bold uppercase tracking-wider">Investasi Terbaik</span>
            <h2 class="text-3xl md:text-4xl font-extrabold text-brand-brown mt-2">Paket Harga</h2>
        </div>

        <div id="pricing-track" class="
            flex overflow-x-scroll snap-x snap-mandatory space-x-6 pb-4 px-6 
            md:grid md:grid-cols-3 md:gap-8 md:items-end md:space-x-0 md:overflow-visible md:p-0 md:m-0 
            relative">

            <div class="pricing-card snap-center flex-shrink-0 w-11/12 md:w-full max-w-sm mx-auto md:mx-0 border border-gray-200 rounded-2xl p-8 text-center hover:shadow-lg transition duration-500">
                <h3 class="bg-gray-100 inline-block px-4 py-1 rounded-full text-sm font-bold text-gray-600 mb-4">Regular</h3>
                <div class="text-3xl font-extrabold text-brand-orange mb-6">Rp 599.000,-</div>
                <ul class="space-y-3 text-sm text-gray-600 mb-8 border-t border-gray-100 pt-6">
                    
                    <li>20x pertemuan</li>
                    <li> 10-15 orang</li>
                    <li>90 menit/pertemuan</li>
                    <li>Jadwal kelas ditentukan bersama</li>
                    <li>Lokasi Kelas di English Cafe</li>
                    <li class="font-bold">gratis mengulang</li>
                    <li class="opacity-0">Placeholder</li>
                </ul>
                <button
                    onclick="window.open('https://api.whatsapp.com/send/?phone=6285183159961&text=Permisi%20kak%20saya%20ingin%20kursus%20di%20English%20Cafe%20untuk%20paket%20Regular&type=phone_number&app_absent=0', '_blank')"
                    class="w-full border-2 border-brand-terra text-brand-terra font-bold py-2 rounded-lg hover:bg-brand-terra hover:text-white transition transform hover:scale-[1.02]">
                     Pilih Paket
                    </button>

            </div>
            
            <div class="pricing-card snap-center flex-shrink-0 w-11/12 md:w-full max-w-sm mx-auto md:mx-0 border-4 border-brand-red bg-white rounded-2xl pt-12 pb-8 px-8 text-center shadow-[0_20px_50px_-10px_rgba(237,51,56,0.3)] transform md:scale-105 relative z-10 duration-500">
                <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-30">
                    <span class="bg-brand-red text-white text-xs font-bold px-3 py-1 rounded-full uppercase">Populer</span>
                </div>
                <h3 class="text-xl font-bold text-brand-brown mb-2 mt-4">Private</h3>
                <div class="text-4xl font-extrabold text-brand-red mb-6">Rp 1.099.999,-</div>
                <ul class="space-y-3 text-sm text-gray-600 mb-8 border-t border-gray-100 pt-6">
                    <li>20x pertemuan</li>
                    <li>1 orang</li>
                    <li>90 menit/pertemuan</li>
                    <li class="font-bold ">Free Vocab, Modul, dan Sertifikat</li>
                    <li class="font-bold text-brand-red">daftar 2 gratis 1 dan daftar 3 gratis 2</li>
                </ul>
                <button
                    onclick="window.open('https://api.whatsapp.com/send/?phone=6285183159961&text=Permisi%20kak%20saya%20ingin%20kursus%20di%20English%20Cafe%20untuk%20paket%20Private&type=phone_number&app_absent=0', '_blank')"
                    class="w-full border-2 border-brand-terra text-brand-terra font-bold py-2 rounded-lg hover:bg-brand-terra hover:text-white transition transform hover:scale-[1.02]">
                     Pilih Paket
                    </button>            </div>
            
            <div class="pricing-card snap-center flex-shrink-0 w-11/12 md:w-full max-w-sm mx-auto md:mx-0 border border-gray-200 rounded-2xl p-8 text-center hover:shadow-lg transition duration-500">
                <h3 class="bg-gray-100 inline-block px-4 py-1 rounded-full text-sm font-bold text-gray-600 mb-4">Full House</h3>
                <div class="text-3xl font-extrabold text-brand-terra mb-6">Rp 2.499.999,-</div>
                <ul class="space-y-3 text-sm text-gray-600 mb-8 border-t border-gray-100 pt-6">
                    <li>20x pertemuan</li>
                    <li>Jadwal Fleksibel</li>
                    <li>Kelas full di rumah</li>
                    <li>1 orang 1 tutor</li>
                    <li>Request materi</li>
                    <li class="font-bold ">Free Modul dan Sertifikat</li>
                    <li class="opacity-0">Placeholder</li>
                </ul>
                <button
                    onclick="window.open('https://api.whatsapp.com/send/?phone=6285183159961&text=Permisi%20kak%20saya%20ingin%20kursus%20di%20English%20Cafe%20untuk%20paket%20Full%20House&type=phone_number&app_absent=0', '_blank')"
                    class="w-full border-2 border-brand-terra text-brand-terra font-bold py-2 rounded-lg hover:bg-brand-terra hover:text-white transition transform hover:scale-[1.02]">
                     Pilih Paket
                    </button>            </div>

        </div>
        <div id="pricing-dots" class="flex justify-center mt-6 md:hidden space-x-2">
            </div>
        
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const track = document.getElementById('pricing-track');
        const dotsContainer = document.getElementById('pricing-dots');
        const cards = track.querySelectorAll('.pricing-card');

        if (track && cards.length > 0) {
            let currentCardIndex = 0;
            const smartKidIndex = 1;

            // Logika hanya diaktifkan untuk perangkat mobile (lebar < 768px)
            if (window.innerWidth < 768) {
                
                // 1. Buat Dots (Indikator)
                cards.forEach((card, index) => {
                    const dot = document.createElement('button');
                    dot.classList.add('w-3', 'h-3', 'rounded-full', 'bg-gray-300', 'transition-colors', 'duration-300');
                    dot.setAttribute('data-index', index);
                    
                    dot.addEventListener('click', () => {
                        scrollToCard(index);
                    });
                    
                    dotsContainer.appendChild(dot);
                });
                
                const dots = dotsContainer.querySelectorAll('button');

                // 2. Fungsi untuk Scroll ke Kartu tertentu
                function scrollToCard(index) {
                    currentCardIndex = index;
                    cards[index].scrollIntoView({
                        behavior: 'smooth',
                        inline: 'center',
                        block: 'nearest'
                    });
                    updateStyles(index);
                }

                // 3. Update Dots dan Styling Kartu (Efek Zoom Mobile)
                function updateStyles(activeIndex) {
                    // Update Dots
                    dots.forEach((dot, index) => {
                        if (index === activeIndex) {
                            dot.classList.remove('bg-gray-300');
                            dot.classList.add('bg-brand-orange');
                        } else {
                            dot.classList.remove('bg-brand-orange');
                            dot.classList.add('bg-gray-300');
                        }
                    });

                    // Update Card Styles
                    cards.forEach((card, index) => {
                        // Reset kelas JS (menghapus semua skala mobile)
                        card.classList.remove('shadow-2xl', 'scale-[0.85]', 'scale-[0.90]', 'z-20', 'border-brand-red');
                        
                        // Default state: Kembali ke skala non-aktif (scale-85)
                        // Skala terkecil untuk efek zoom-out
                        card.classList.add('shadow-lg', 'scale-[0.85]'); 

                        if (index === activeIndex) {
                            // Gaya untuk kartu yang aktif: scale-[0.90] (maksimal zoom-in)
                            card.classList.remove('scale-[0.85]');
                            card.classList.add('shadow-2xl', 'scale-[0.90]', 'z-20', 'border-brand-red'); 
                            
                            // Terapkan semua gaya premium ke Smart Kid saat aktif
                            if (index === smartKidIndex) {
                                card.classList.add('border-4', 'border-brand-red', 'shadow-[0_20px_50px_-10px_rgba(237,51,56,0.3)]');
                                card.classList.remove('border', 'border-gray-200');
                            }
                        } else {
                            // Gaya untuk kartu yang tidak aktif (scale-85)

                            if (index === smartKidIndex) {
                                // Hapus border kuat Smart Kid saat tidak aktif dan kembalikan ke border standar
                                card.classList.remove('border-4', 'border-brand-red', 'shadow-[0_20px_50px_-10px_rgba(237,51,56,0.3)]');
                                card.classList.add('border', 'border-gray-200');
                            } else {
                                card.classList.add('border', 'border-gray-200');
                            }
                        }
                    });

                    currentCardIndex = activeIndex;
                }
                
                // 4. Deteksi posisi scroll (untuk update styles saat swipe)
                let isScrolling;
                track.addEventListener('scroll', () => {
                    window.clearTimeout(isScrolling);

                    isScrolling = setTimeout(() => {
                        let closestIndex = 0;
                        let minDistance = Infinity;
                        
                        cards.forEach((card, index) => {
                            const cardCenter = card.offsetLeft + (card.offsetWidth / 2);
                            const trackCenter = track.scrollLeft + (track.offsetWidth / 2) + 2; 
                            const distance = Math.abs(cardCenter - trackCenter);

                            if (distance < minDistance) {
                                minDistance = distance;
                                closestIndex = index;
                            }
                        });

                        if (closestIndex !== currentCardIndex) {
                            updateStyles(closestIndex);
                        }
                    }, 66);
                });

                // 5. Inisialisasi awal
                if (cards[smartKidIndex]) {
                    // Berikan skala awal 85% dan border ke semua kartu
                    cards.forEach(card => card.classList.add('border', 'border-gray-200', 'scale-[0.85]'));
                    
                    // Hilangkan border dan skala 85% pada Smart Kid untuk scroll awal
                    cards[smartKidIndex].classList.remove('border', 'border-gray-200', 'scale-[0.85]');
                    scrollToCard(smartKidIndex); 
                } else {
                    scrollToCard(0);
                }
            } else {
                // Logika Desktop: Pastikan Smart Kid selalu memiliki style POPULAR di desktop
                const smartKidCard = cards[smartKidIndex];
                if (smartKidCard) {
                    smartKidCard.classList.add(
                        'border-4', 
                        'border-brand-red', 
                        'shadow-[0_20px_50px_-10px_rgba(237,51,56,0.3)]',
                        'md:scale-105'
                    );
                    
                    // Hapus kelas mobile yang mungkin ditambahkan
                    smartKidCard.classList.remove('border', 'border-gray-200', 'scale-[1.03]', 'scale-100', 'scale-90', 'scale-85', 'scale-80', 'scale-95', 'scale-[0.97]');
                }
            }
        }
    });
</script>