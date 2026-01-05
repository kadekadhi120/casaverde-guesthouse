<section id="contact" class="h-screen w-full snap-start bg-[#1a3c26] flex flex-col relative">
    
    <div class="bg-[#8ba676] w-full py-8 px-20 flex items-center justify-between mt-20">
        <span class="text-black font-semibold w-1/4">What is your experience with us?</span>
        <input type="text" placeholder="Type your thought" class="bg-black/10 rounded-full px-4 py-2 w-1/3 placeholder-gray-600 focus:outline-none">
        <input type="text" placeholder="Your name" class="bg-black/10 rounded-full px-4 py-2 w-1/4 placeholder-gray-600 focus:outline-none">
        <div class="flex items-center gap-2 text-black">
            <span>★★★★★</span>
            <span>→</span>
        </div>
    </div>

    <div class="flex-grow relative flex items-center justify-center bg-[asset('images/homebanner.png')] bg-cover bg-center">
        <div class="absolute inset-0 bg-black/60"></div>
        
        <div class="relative z-10 flex w-full max-w-6xl px-10">
            <div class="flex flex-col gap-4 text-xl font-light text-gray-300 border-l-2 border-green-600 pl-6">
                <a href="#home" class="hover:text-white">Home</a>
                <a href="#about" class="hover:text-white">About</a>
                <a href="#facilities" class="hover:text-white">Facilities</a>
                <a href="#contact" class="hover:text-white">Contact</a>
            </div>

            <div class="mx-auto bg-black/40 p-6 rounded-lg border border-green-800">
                <img src="path/to/logo-white.png" alt="Casa Verde" class="h-32">
            </div>
        </div>
    </div>

    <div class="bg-[#142e1e] py-6 px-10 text-xs text-gray-400 flex justify-between items-center">
        <div class="w-1/3">
            <p>From your stay, your plans, to your experiences everything handled in one step.</p>
        </div>
        <div class="flex gap-4 opacity-50">
            <img src="{{ asset('images/agoda.png') }}" class="h-4">
            <img src="{{ asset('images/traveloka.png') }}" class="h-4">
            <img src="{{ asset('images/booking.png') }}" class="h-4">
        </div>
        <div class="text-right">
            <p>Copyright 2025 Casa Verde Guesthouse reserved</p>
        </div>
    </div>
</section>