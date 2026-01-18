<style>
    /* Definisi Animasi Scroll */
    @keyframes scroll {
        0% { transform: translateX(0); }
        /* -50% karena data diduplikasi 2x. Jadi saat mencapai 50%, dia balik ke 0 tanpa terlihat user */
        100% { transform: translateX(-50%); } 
    }
    
    .animate-scroll {
        display: flex;
        width: max-content;
        /* Durasi saya perlambat sedikit agar enak dilihat di area sempit */
        animation: scroll 30s linear infinite; 
    }

    .animate-scroll:hover {
        animation-play-state: paused;
    }
</style>

<section id="facilities" class="h-screen w-full snap-start bg-[#1a3c26] flex flex-col relative overflow-hidden">
    
    {{-- HEADER --}}
    <div class="bg-[#294A2B] w-full mt-20 text-center py-2 shrink-0 z-10">
        <h2 class="text-xl tracking-[0.3em] my-4 border-b border-gray-500 pb-2 inline-block text-white">
            OUR FACILITIES
        </h2>
    </div>

    {{-- CONTAINER UTAMA --}}
    <div class="flex-1 w-full flex items-center justify-center py-4 bg-[#072404]">
        
        {{-- LOGIKA: Jika Data > 4 (SLIDER MODE TAPI TERBATAS) --}}
        @if($facilities->count() > 4)
            @php
                $loopedFacilities = $facilities->merge($facilities);
            @endphp

            {{-- 
               PERUBAHAN UTAMA DI SINI:
               1. max-w-7xl: Membatasi lebar agar sama dengan Grid statis.
               2. mx-auto: Posisi di tengah.
               3. overflow-hidden: Memotong gambar yang lewat dari batas 7xl (kanan/kiri hilang).
               4. px-6: Padding agar sejajar dengan grid statis.
            --}}
            <div class="w-full max-w-7xl mx-auto overflow-hidden px-6 relative">
                
                {{-- Efek Fade Kiri & Kanan (Opsional: Agar potongan tidak kasar) --}}
                <div class="absolute top-0 bottom-0 left-0 w-8 bg-gradient-to-r from-[#072404] to-transparent z-10"></div>
                <div class="absolute top-0 bottom-0 right-0 w-8 bg-gradient-to-l from-[#072404] to-transparent z-10"></div>

                {{-- Container Animasi --}}
                <div class="animate-scroll flex gap-6">
                    @foreach($loopedFacilities as $facility)
                        <div class="relative group cursor-pointer overflow-hidden rounded-lg h-80 w-72 md:w-[290px] shrink-0 shadow-lg border border-white/10">
                            
                            <img src="{{ Str::startsWith($facility->image, 'http') ? $facility->image : Storage::url($facility->image) }}" 
                                 alt="{{ $facility->name }}"
                                 class="w-full h-full object-cover transition-transform duration-700 ease-in-out group-hover:scale-110 brightness-75 group-hover:brightness-90">
                            
                            <div class="absolute inset-0 bg-black/20 group-hover:bg-black/10 transition-colors"></div>

                            <div class="absolute inset-0 flex flex-col items-center justify-center">
                                <h3 class="text-white text-2xl font-semibold tracking-[0.25em] uppercase drop-shadow-md text-center">
                                    {{ $facility->name }}
                                </h3>
                            </div>

                            <div class="absolute bottom-0 left-0 right-0 h-1.5 bg-white w-0 group-hover:w-full transition-all duration-300 ease-out"></div>
                        </div>
                    @endforeach
                </div>
            </div>

        {{-- LOGIKA: Jika Data <= 4 (GRID MODE / STATIC) --}}
        @else
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 w-full max-w-7xl px-6 mx-auto">
                @foreach($facilities as $index => $facility)
                <div class="relative group cursor-pointer overflow-hidden rounded-lg h-64 md:h-80 w-full shadow-lg border border-white/10">
                    
                    <img src="{{ Str::startsWith($facility->image, 'http') ? $facility->image : Storage::url($facility->image) }}" 
                         alt="{{ $facility->name }}"
                         class="w-full h-full object-cover transition-transform duration-700 ease-in-out group-hover:scale-110 brightness-75 group-hover:brightness-90">
                    
                    <div class="absolute inset-0 bg-black/20 group-hover:bg-black/10 transition-colors"></div>

                    <div class="absolute inset-0 flex flex-col items-center justify-center">
                        <h3 class="text-white text-xl md:text-2xl font-semibold tracking-[0.25em] uppercase drop-shadow-md text-center">
                            {{ $facility->name }}
                        </h3>
                    </div>

                    <div class="absolute bottom-0 left-0 right-0 h-1.5 bg-white transition-all duration-300 ease-out 
                        {{ $index === 0 ? 'w-full' : 'w-0 group-hover:w-full' }}">
                    </div>
                </div>
                @endforeach
            </div>
        @endif

    </div>

    {{-- BAGIAN REVIEWS (Tetap Sama) --}}
    <div class="shrink-0 w-full mb-8 overflow-hidden z-10 bg-[#072404]/50 backdrop-blur-sm py-4">
        {{-- ... Kode Review ... --}}
         <h2 class="text-center text-lg md:text-xl tracking-[0.3em] mb-6 text-white">WHAT THEY SAY</h2>
         {{-- @php
            $dummyReviews = [
                (object)['user_name' => 'Cris Setianingsih', 'comment' => 'Pelayanannya sangat bagus...', 'rating' => 5],
                (object)['user_name' => 'Budi Santoso', 'comment' => 'Tempat yang nyaman...', 'rating' => 5],
                (object)['user_name' => 'Siti Aminah', 'comment' => 'Kolam renangnya juara...', 'rating' => 4],
                (object)['user_name' => 'Dian Sastro', 'comment' => 'Recommended!', 'rating' => 5],
            ];
            $reviews = collect($dummyReviews)->merge($dummyReviews); 
         @endphp --}}

         <div class="w-full relative">
             <div class="animate-scroll flex gap-6 px-6">
                 @foreach($reviews as $review)
                 <div class="w-[300px] shrink-0 bg-[#294A2B] p-6 rounded-xl text-center flex flex-col justify-between h-48 border border-white/5 shadow-md hover:bg-[#345e37] transition-colors">
                     <div class="text-4xl font-serif text-gray-400 leading-none h-8">“</div>
                     <p class="text-xs text-gray-200 italic my-2 line-clamp-3">"{{ $review->comment }}"</p>
                     <div>
                         <h4 class="font-bold text-sm text-white">{{ $review->user_name }}</h4>
                         <div class="flex justify-center gap-1 text-yellow-400 text-xs mt-1">
                             @for($i=0; $i<$review->rating; $i++) ★ @endfor
                         </div>
                     </div>
                 </div>
                 @endforeach
             </div>
         </div>
    </div>

</section>