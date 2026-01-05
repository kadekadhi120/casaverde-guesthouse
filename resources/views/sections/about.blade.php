<section
  id="about"
  class="h-[100dvh] w-full snap-start relative flex flex-col overflow-hidden bg-[#003703] bg-center"
  style="background-image: url('{{ asset('images/banner.jpg') }}')"
>

    <div class="w-full h-full flex flex-col gap-6">

    <div class="flex h-[55%] w-full gap-6">
        
        <div class="w-full relative overflow-hidden group">
            
            <img 
                src="{{ asset('images/homebanner.png') }}" 
                alt="About Background"
                class="absolute inset-0 w-full h-full object-cover"
            >

            <div class="absolute inset-0 bg-black/50"></div>

            <div class="relative z-10 h-full p-8 flex flex-col justify-center text-white">
                <div class="flex items-center gap-2 mb-4 cursor-pointer hover:gap-4 transition-all">
                    <span class="text-sm font-light uppercase tracking-widest">About us</span>
                    <span class="text-xl">→</span>
                </div>
                <h2 class="text-3xl md:text-4xl font-serif font-light leading-tight mb-6">
                    Enjoy the best affordable accommodation in Bali
                </h2>
                <p class="text-sm text-gray-300 leading-relaxed font-light">
                    Surrounded by gardens and features a central swimming pool. It's fully equipped and offers
                    affordable rates, ensuring a comfortable and peaceful stay.
                </p>
            </div>
        </div>
    </div>

        <div class="flex h-[45%] w-full gap-6 px-6">
            <div class="w-1/4 grid grid-cols-2 gap-4">
                <div
                    class="bg-[#1a3c26] rounded-2xl flex flex-col items-center justify-center text-center p-4 hover:bg-[#235033] transition cursor-pointer group">
                    <span class="text-2xl mb-2 group-hover:scale-110 transition">🛏️</span>
                    <h4 class="text-white font-medium text-xs md:text-sm">Accommodation</h4>
                    <p class="text-[10px] text-gray-400 mt-1">Room with complete facilities</p>
                </div>
                <div
                    class="bg-[#1a3c26] rounded-2xl flex flex-col items-center justify-center text-center p-4 hover:bg-[#235033] transition cursor-pointer group">
                    <span class="text-2xl mb-2 group-hover:scale-110 transition">🍲</span>
                    <h4 class="text-white font-medium text-xs md:text-sm">Warung</h4>
                    <p class="text-[10px] text-gray-400 mt-1">Available for breakfast, lunch</p>
                </div>
                <div
                    class="bg-[#1a3c26] rounded-2xl flex flex-col items-center justify-center text-center p-4 hover:bg-[#235033] transition cursor-pointer group">
                    <span class="text-2xl mb-2 group-hover:scale-110 transition">🚗</span>
                    <h4 class="text-white font-medium text-xs md:text-sm">Transportation</h4>
                    <p class="text-[10px] text-gray-400 mt-1">Car & Bike rental service</p>
                </div>
                <div
                    class="bg-[#1a3c26] rounded-2xl flex flex-col items-center justify-center text-center p-4 hover:bg-[#235033] transition cursor-pointer group">
                    <span class="text-2xl mb-2 group-hover:scale-110 transition">💆</span>
                    <h4 class="text-white font-medium text-xs md:text-sm">SPA</h4>
                    <p class="text-[10px] text-gray-400 mt-1">Indulge yourself with spa</p>
                </div>
            </div>

            <div class="w-2/4 h-full bg-[#d9d9d9] rounded-3xl overflow-hidden relative group">
                <div class="absolute inset-0 flex items-center justify-center text-gray-500 font-medium">
                    Map Area
                </div>
            </div>

            <div class="w-1/4 h-full flex flex-col justify-center pl-4 text-white">
                <h3 class="text-2xl font-serif mb-4">Our Locations</h3>
                <p class="text-lg font-light leading-snug mb-6 text-gray-200">
                    Strategic in every aspect for your daily needs
                </p>
                <div class="text-xs text-gray-400 space-y-1 font-light">
                    <p>Jl. Raya Abianbase No.127,</p>
                    <p>Abianbase, Kec. Mengwi,</p>
                    <p>Kabupaten Badung, Bali 80351</p>
                </div>
            </div>

        </div>
    </div>
</section>