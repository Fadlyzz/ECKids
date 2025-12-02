<section id="pricing-section" class="relative py-24 overflow-hidden">
    <!-- Background gradasi -->
    <div class="absolute inset-0 -z-20 bg-gradient-to-tr from-brand-orange/20 via-brand-red/20 to-brand-terra/10"></div>
    <div class="absolute -top-32 -left-32 w-96 h-96 bg-brand-orange/20 rounded-full blur-3xl -z-10"></div>
    <div class="absolute -bottom-32 -right-32 w-[32rem] h-[32rem] bg-brand-red/20 rounded-full blur-3xl -z-10"></div>
    <div class="absolute top-1/3 right-1/4 w-80 h-80 bg-brand-terra/10 rounded-full blur-3xl -z-10"></div>

    <div class="container mx-auto px-6">
        <div class="w-full py-10 text-center max-w-3xl mx-auto">
            <h2 class="text-4xl md:text-5xl font-bold text-brand-brown">Paket Harga</h2>
        </div>

        <div class="relative mt-10">
            <!-- Tombol navigasi carousel -->
            <button id="prev-pricing" class="absolute left-0 top-1/2 z-20 -translate-y-1/2 -ml-3
                                            bg-white/90 hover:bg-white text-brand-brown p-4 rounded-full
                                            shadow-xl transition hidden md:block border border-gray-200">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>

            <div id="pricing-track" class="flex gap-8 overflow-x-scroll snap-x snap-mandatory pb-4 px-6 -mx-6
                                        relative cursor-grab active:cursor-grabbing focus:outline-none hide-scrollbar"
                                        tabindex="0">

                <!-- Kartu 1: Regular -->
                <div class="pricing-card snap-center flex-shrink-0 w-11/12 md:w-1/3 p-10 rounded-2xl shadow-lg transition text-center inline-block bg-white">
                    <h3 class="text-xl font-bold mb-3 text-brand-brown">Regular</h3>
                    <div class="text-3xl font-extrabold text-brand-orange mb-4">Rp 599.999,-</div>
                    <ul class="space-y-3 text-sm text-gray-600 mb-4 flex-1">
                        <li>20x pertemuan</li>
                        <li>10-15 orang</li>
                        <li>90 menit/pertemuan</li>
                        <li>Jadwal kelas ditentukan bersama</li>
                        <li>Lokasi Kelas di English Cafe</li>
                        <li class="font-bold">gratis mengulang</li>
                    </ul>
                    <button onclick="window.open('https://api.whatsapp.com/send/?phone=6285183159961&text=Saya%20ingin%20paket%20Regular', '_blank')"
                        class="w-full border-2 border-brand-terra text-brand-terra font-bold py-3 rounded-lg hover:bg-brand-terra hover:text-white transition">
                        Pilih Paket
                    </button>
                </div>

                <!-- Kartu 2: Private (Tengah) -->
                <div class="pricing-card snap-center flex-shrink-0 w-11/12 md:w-1/3 p-10 rounded-2xl shadow-[0_20px_50px_-10px_rgba(237,51,56,0.3)]
                            relative z-10 text-center inline-block bg-white border-4 border-brand-red">
                    <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-20">
                        <span class="bg-brand-red text-white text-xs font-bold px-3 py-1 rounded-full uppercase inline-block">Populer</span>
                    </div>
                    <h3 class="text-xl font-bold text-brand-brown mb-3 mt-4">Private</h3>
                    <div class="text-3xl font-extrabold text-brand-red mb-4">Rp 1.099.999,-</div>
                    <ul class="space-y-3 text-sm text-gray-600 mb-4 flex-1">
                        <li>20x pertemuan</li>
                        <li>1 orang</li>
                        <li>90 menit/pertemuan</li>
                        <li class="font-bold">Free Vocab, Modul, dan Sertifikat</li>
                        <li class="font-bold text-brand-red">daftar 2 gratis 1 & daftar 3 gratis 2</li>
                    </ul>
                    <button onclick="window.open('https://api.whatsapp.com/send/?phone=6285183159961&text=Saya%20ingin%20paket%20Private', '_blank')"
                        class="w-full border-2 border-brand-terra text-brand-terra font-bold py-3 rounded-lg hover:bg-brand-terra hover:text-white transition">
                        Pilih Paket
                    </button>
                </div>

                <!-- Kartu 3: Full House -->
                <div class="pricing-card snap-center flex-shrink-0 w-11/12 md:w-1/3 p-10 rounded-2xl shadow-lg transition text-center inline-block bg-white">
                    <h3 class="text-xl font-bold mb-3 text-brand-brown">Full House</h3>
                    <div class="text-3xl font-extrabold text-brand-terra mb-4">Rp 2.499.999,-</div>
                    <ul class="space-y-3 text-sm text-gray-600 mb-4 flex-1">
                        <li>20x pertemuan</li>
                        <li>Jadwal Fleksibel</li>
                        <li>Kelas full di rumah</li>
                        <li>1 orang 1 tutor</li>
                        <li>Request materi</li>
                        <li class="font-bold">Free Modul dan Sertifikat</li>
                    </ul>
                    <button onclick="window.open('https://api.whatsapp.com/send/?phone=6285183159961&text=Saya%20ingin%20paket%20FullHouse', '_blank')"
                        class="w-full border-2 border-brand-terra text-brand-terra font-bold py-3 rounded-lg hover:bg-brand-terra hover:text-white transition">
                        Pilih Paket
                    </button>
                </div>

            </div>

            <button id="next-pricing" class="absolute right-0 top-1/2 z-20 -translate-y-1/2 -mr-3
                                            bg-white/90 hover:bg-white text-brand-brown p-4 rounded-full
                                            shadow-xl transition hidden md:block border border-gray-200">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>
        </div>

        <div id="pricing-dots" class="flex justify-center mt-6 space-x-2"></div>
    </div>
</section>

<style>
/* Efek scale untuk kartu */
.pricing-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    transform: scale(0.75);
}
.pricing-card.active {
    transform: scale(0.85);
}
</style>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const track = document.getElementById('pricing-track');
    const dotsContainer = document.getElementById('pricing-dots');
    const cards = track.querySelectorAll('.pricing-card');
    const prevBtn = document.getElementById('prev-pricing');
    const nextBtn = document.getElementById('next-pricing');

    if (!track || cards.length === 0) return;

    let currentIndex = 0;
    const totalCards = cards.length;

    // Buat dots
    cards.forEach((card, idx) => {
        const dot = document.createElement('button');
        dot.className = 'w-3 h-3 rounded-full bg-gray-300 transition-colors duration-300';
        dot.addEventListener('click', () => { scrollToCard(idx); });
        dotsContainer.appendChild(dot);
    });

    const dots = dotsContainer.querySelectorAll('button');

    function scrollToCard(index) {
        const card = cards[index];
        const offset = card.offsetLeft - (track.clientWidth - card.offsetWidth)/2;
        track.scrollTo({left: offset, behavior: 'smooth'});
        updateActive(index);
    }

    function updateActive(index) {
        currentIndex = index;
        cards.forEach((card, i) => {
            if (i === index) {
                card.classList.add('active'); // scale-0.85
            } else {
                card.classList.remove('active'); // scale-0.75
            }
        });
        dots.forEach((dot, i) => dot.classList.toggle('bg-brand-orange', i === index));
    }

    prevBtn.addEventListener('click', () => {
        const newIndex = (currentIndex - 1 + totalCards) % totalCards;
        scrollToCard(newIndex);
    });
    nextBtn.addEventListener('click', () => {
        const newIndex = (currentIndex + 1) % totalCards;
        scrollToCard(newIndex);
    });

    // Inisialisasi awal: Private tetap di tengah
    scrollToCard(1);
});
</script>
