<section
  id="home"
  class="h-[100dvh] w-full snap-start relative flex flex-col overflow-hidden bg-cover bg-center"
  style="background-image: url('{{ asset('images/banner.jpg') }}')"
>
    <div class="absolute inset-0 bg-black/40 z-0"></div>

    <div class="flex-1 w-full relative z-10 overflow-hidden flex items-center justify-center">
        <img 
            src="{{ asset('images/homebanner.png') }}"
            alt="Main Banner"
            class="w-full h-full object-cover" 
        >

        <div class="absolute bottom-4 left-6 md:left-12 text-white z-30">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 md:h-20 md:w-20" viewBox="0 0 24 24" fill="currentColor">
                <path d="M14.017 21L14.017 18C14.017 16.8954 14.9124 16 16.017 16H19.017C19.5693 16 20.017 15.5523 20.017 15V9C20.017 8.44772 19.5693 8 19.017 8H15.017C14.4647 8 14.017 8.44772 14.017 9V11C14.017 11.5523 13.5693 12 13.017 12H12.017V5H22.017V15C22.017 18.3137 19.3307 21 16.017 21H14.017ZM5.0166 21L5.0166 18C5.0166 16.8954 5.91203 16 7.0166 16H10.0166C10.5689 16 11.0166 15.5523 11.0166 15V9C11.0166 8.44772 10.5689 8 10.0166 8H6.0166C5.46432 8 5.0166 8.44772 5.0166 9V11C5.0166 11.5523 4.56889 12 4.0166 12H3.0166V5H13.0166V15C13.0166 18.3137 10.3303 21 7.0166 21H5.0166Z"></path>
            </svg>
        </div>
    </div>

    <div class="w-full shrink-0 z-20 bg-[#1a3c26] text-white py-6 px-6 md:px-12 flex flex-col md:flex-row justify-between items-center gap-4 border-t border-white/10">
        
        <div class="text-2xs md:text-sm font-light opacity-90 max-w-xs text-center md:text-left">
            <p>From your stay, your plans, to your experiences everything handled in one step.</p>
        </div>

        <div class="flex gap-8 items-center grayscale opacity-80 hover:grayscale-0 hover:opacity-100 transition duration-500">
            <img src="{{ asset('images/agoda.png') }}" class="h-5 md:h-6 w-auto">
            <img src="{{ asset('images/traveloka.png') }}" class="h-5 md:h-6 w-auto">
            <img src="{{ asset('images/booking.png') }}" class="h-5 md:h-6 w-auto">
        </div>

        <div class="text-xs md:text-sm font-light opacity-90 text-center md:text-right">
            <p>Book now! Travel effortlessly.</p>
        </div>

    </div>
</section>