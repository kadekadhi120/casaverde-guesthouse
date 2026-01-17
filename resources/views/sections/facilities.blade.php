<section id="facilities" class="h-screen w-full snap-start bg-[#1a3c26] flex flex-col relative overflow-hidden">
    
    <div class="bg-[#294A2B] w-full mt-20 text-center py-2 shrink-0">
        <h2 class="text-xl tracking-[0.3em] my-4 border-b border-gray-500 pb-2 inline-block text-white">
            OUR FACILITIES
        </h2>
    </div>

    <div class="flex-1 w-full flex items-center justify-center py-4 bg-[#072404]">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 w-full max-w-7xl px-6 mx-auto">
            
            @php
                $facilities = [
                    ['name' => 'POOL', 'img' => 'https://images.unsplash.com/photo-1576013551627-0cc20b96c2a7?auto=format&fit=crop&q=80&w=800'],
                    ['name' => 'ROOFTOP', 'img' => 'https://images.unsplash.com/photo-1533105079780-92b9be482077?auto=format&fit=crop&q=80&w=800'],
                    ['name' => 'ROOMS', 'img' => 'https://images.unsplash.com/photo-1611892440504-42a792e24d32?auto=format&fit=crop&q=80&w=800'],
                    ['name' => 'PANTRY', 'img' => 'https://images.unsplash.com/photo-1556910103-1c02745a30bf?auto=format&fit=crop&q=80&w=800']
                ];
            @endphp

            @foreach($facilities as $index => $facility)
            <div class="relative group cursor-pointer overflow-hidden rounded-lg h-64 md:h-80 w-full shadow-lg">
                <img src="{{ $facility['img'] }}" 
                     alt="{{ $facility['name'] }}"
                     class="w-full h-full object-cover transition-transform duration-700 ease-in-out group-hover:scale-110 brightness-75 group-hover:brightness-90">
                
                <div class="absolute inset-0 bg-black/20 group-hover:bg-black/10 transition-colors"></div>

                <div class="absolute inset-0 flex flex-col items-center justify-center">
                    <h3 class="text-white text-xl md:text-2xl font-semibold tracking-[0.25em] uppercase drop-shadow-md">
                        {{ $facility['name'] }}
                    </h3>
                </div>

                <div class="absolute bottom-0 left-0 right-0 h-1.5 bg-white transition-all duration-300 ease-out 
                    {{ $index === 0 ? 'w-full' : 'w-0 group-hover:w-full' }}">
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="shrink-0 w-full mb-8">
        <h2 class="text-center text-lg md:text-xl tracking-[0.3em] mb-6 text-white mt-5">WHAT THEY SAY</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 w-full max-w-6xl mx-auto px-6">
            @for($i=0; $i<4; $i++)
            <div class="bg-[#294A2B] p-6 rounded-xl text-center flex flex-col justify-between h-48 border border-white/5 shadow-md">
                <div class="text-4xl font-serif text-gray-400 leading-none h-8">“</div>
                <p class="text-xs text-gray-200 italic my-2 line-clamp-3">
                    "Pelayanannya sangat bagus, karyawannya sangat ramah terutama Tiya Aprilia..."
                </p>
                <div>
                    <h4 class="font-bold text-sm text-white">Cris Setianingsih</h4>
                    <div class="text-yellow-400 text-xs mt-1">★★★★★</div>
                </div>
            </div>
            @endfor
        </div>
    </div>

</section>