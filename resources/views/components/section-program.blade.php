<section id="program-section" class="py-20 relative overflow-hidden bg-brand-brown">
    
    <!-- Dekorasi gradasi & bulatan animasi -->
    <div class="absolute inset-0 -z-10 overflow-hidden">
        <div class="absolute -top-32 -left-20 w-72 h-72 bg-gradient-to-tr from-brand-orange/30 via-brand-red/20 to-brand-terra/20 rounded-full blur-3xl animate-pulse-slow"></div>
        <div class="absolute -bottom-32 -right-24 w-96 h-96 bg-gradient-to-br from-brand-red/20 via-brand-orange/10 to-brand-terra/10 rounded-full blur-2xl animate-pulse-slow"></div>
    </div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center mb-12">
            <span class="text-brand-orange font-bold uppercase tracking-wider">Aktivitas</span>
            <h2 class="text-3xl md:text-4xl font-bold text-white mt-2">Apa yang Kami Lakukan</h2>
        </div>

        <div class="grid md:grid-cols-2 gap-6">
            <div class="bg-white p-6 rounded-xl shadow-md flex items-start gap-4 hover:shadow-lg transition transform hover:scale-[1.02]">
                <div class="w-12 h-12 bg-brand-orange text-white rounded-lg flex items-center justify-center text-xl flex-shrink-0">
                    <i class="fas fa-book-reader"></i>
                </div>
                <div>
                    <h4 class="font-bold text-lg mb-2 text-brand-brown">Bercerita Interaktif</h4>
                    <p class="text-gray-500 text-sm">Metode bercerita yang menghidupkan imajinasi.</p>
                </div>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-md flex items-start gap-4 hover:shadow-lg transition transform hover:scale-[1.02]">
                <div class="w-12 h-12 bg-brand-terra text-white rounded-lg flex items-center justify-center text-xl flex-shrink-0">
                    <i class="fas fa-gamepad"></i>
                </div>
                <div>
                    <h4 class="font-bold text-lg mb-2 text-brand-brown">Game</h4>
                    <p class="text-gray-500 text-sm">Belajar kosakata baru melalui permainan.</p>
                </div>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-md flex items-start gap-4 hover:shadow-lg transition transform hover:scale-[1.02]">
                <div class="w-12 h-12 bg-brand-red text-white rounded-lg flex items-center justify-center text-xl flex-shrink-0">
                    <i class="fas fa-comment"></i>
                </div>
                <div>
                    <h4 class="font-bold text-lg mb-2 text-brand-brown">Daily talk</h4>
                    <p class="text-gray-500 text-sm">Melakukan obrolan langsung untuk meningkatkan speaking skill.</p>
                </div>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-md flex items-start gap-4 hover:shadow-lg transition transform hover:scale-[1.02]">
                <div class="w-12 h-12 bg-brand-brown text-white rounded-lg flex items-center justify-center text-xl flex-shrink-0">
                    <i class="fas fa-pencil-alt"></i>
                </div>
                <div>
                    <h4 class="font-bold text-lg mb-2 text-brand-brown">Lembar Kerja Kreatif</h4>
                    <p class="text-gray-500 text-sm">Lembar kerja warna-warni yang menyenangkan.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Animasi pulse halus untuk bulatan background */
@keyframes pulse-slow {
    0%, 100% { transform: scale(1); opacity: 0.7; }
    50% { transform: scale(1.1); opacity: 0.5; }
}
.animate-pulse-slow {
    animation: pulse-slow 6s ease-in-out infinite;
}
</style>
