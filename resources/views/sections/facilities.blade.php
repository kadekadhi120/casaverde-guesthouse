<section id="facilities" class="h-screen w-full snap-start bg-[#0f2818] flex flex-col justify-center items-center py-10 px-10">
    <h2 class="text-center text-xl tracking-[0.3em] mb-8 border-b border-gray-500 pb-2 inline-block">OUR FACILITIES</h2>

    <div class="grid grid-cols-4 gap-4 w-full max-w-6xl mb-10 h-1/3">
        @foreach(['POOL', 'ROOFTOP', 'ROOMS', 'PANTRY'] as $facility)
        <div class="relative group overflow-hidden rounded-lg h-full">
            <img src="path/to/{{ strtolower($facility) }}.jpg" class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
            <div class="absolute inset-0 bg-black/30 flex items-center justify-center">
                <h3 class="text-xl font-bold tracking-widest">{{ $facility }}</h3>
            </div>
        </div>
        @endforeach
    </div>

    <h2 class="text-center text-xl tracking-[0.3em] mb-8">WHAT DO THEY SAID</h2>
    <div class="grid grid-cols-4 gap-6 w-full max-w-6xl">
        @for($i=0; $i<4; $i++)
        <div class="bg-[#1a3c26] p-6 rounded-xl text-center flex flex-col justify-between h-56">
            <div class="text-4xl font-serif text-gray-400">“</div>
            <p class="text-xs text-gray-300 italic my-2">"Pelayanannya sangat bagus, karyawannya sangat ramah terutama Tiya Aprilia..."</p>
            <div>
                <h4 class="font-bold text-sm">Cris Setianingsih</h4>
                <div class="text-yellow-400 text-xs mt-1">★★★★★</div>
            </div>
        </div>
        @endfor
    </div>
</section>