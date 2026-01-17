<section id="contact" class="h-screen w-full snap-start bg-[#1a3c26] flex flex-col relative">
    
    {{-- Review Section Bar --}}
    <div class="bg-[#8ba676] w-full py-8 px-20 flex items-center justify-between mt-20">
        <span class="text-black font-semibold w-1/4">What is your experience with us?</span>

        <form action="{{ route('reviews.store') }}" method="POST" class="flex flex-1 items-center justify-between gap-4">
            @csrf
            
            {{-- LOGIKA INPUT PESAN --}}
            <input type="text" 
                   name="message" 
                   {{-- Tampilkan pesan lama jika ada --}}
                   value="{{ $userReview->comment ?? '' }}"
                   {{-- Placeholder menyesuaikan kondisi --}}
                   placeholder="{{ $userReview ? 'Thank you for your review!' : (Auth::check() ? 'Type your thought' : 'Please login to review') }}" 
                   class="bg-black/10 rounded-full px-4 py-2 w-1/3 placeholder-gray-600 focus:outline-none disabled:cursor-not-allowed disabled:opacity-80 transition font-medium"
                   {{-- Matikan jika Guest ATAU Sudah Review --}}
                   @disabled(Auth::guest() || $userReview)
                   required>

            {{-- LOGIKA INPUT NAMA --}}
            <input type="text" 
                   name="name" 
                   placeholder="Your name" 
                   {{-- Gunakan nama dari Auth user --}}
                   value="{{ Auth::user()->name ?? '' }}"
                   class="bg-black/10 rounded-full px-4 py-2 w-1/4 placeholder-gray-600 focus:outline-none disabled:cursor-not-allowed disabled:opacity-80 transition font-medium"
                   @disabled(Auth::guest() || $userReview)
                   readonly>

            <div class="flex items-center gap-4">
                {{-- Input Rating Hidden (Isi value jika sudah ada review) --}}
                <input type="hidden" name="rating" id="ratingInput" value="{{ $userReview->rating ?? 0 }}">

                {{-- LOGIKA BINTANG --}}
                <div class="flex items-center gap-1">
                    @for($i = 1; $i <= 5; $i++)
                        @php
                            // Cek apakah bintang ini harus kuning
                            // Jika ada review DAN index loop <= rating user, maka KUNING
                            $isYellow = $userReview && $i <= $userReview->rating;
                        @endphp

                        <button type="button" 
                                {{-- Jika belum review, jalankan fungsi JS. Jika sudah, matikan fungsi --}}
                                onclick="{{ $userReview ? '' : "setRating($i)" }}" 
                                class="text-xl focus:outline-none transition-transform {{ (Auth::guest() || $userReview) ? 'cursor-default' : 'hover:scale-110 cursor-pointer' }}"
                                @disabled(Auth::guest() || $userReview)>
                            
                            {{-- Render warna langsung via PHP agar tidak nge-blink saat loading --}}
                            <span id="star-{{ $i }}" class="text-2xl {{ $isYellow ? 'text-yellow-400' : 'text-black/30' }}">★</span>
                        </button>
                    @endfor
                </div>

                {{-- LOGIKA TOMBOL --}}
                @guest
                    <a href="{{ route('login') }}" class="bg-black text-white px-6 py-2 rounded-full text-sm font-semibold hover:bg-gray-800 transition">
                        Login
                    </a>
                @else
                    @if($userReview)
                        {{-- Tombol mati jika sudah review --}}
                        <button type="button" disabled class="bg-gray-600 text-white px-6 py-2 rounded-full text-sm font-semibold cursor-not-allowed flex items-center gap-2 opacity-100">
                            Sent <span>✓</span>
                        </button>
                    @else
                        {{-- Tombol aktif jika belum review --}}
                        <button type="submit" class="bg-[#1a3c26] text-white px-6 py-2 rounded-full text-sm font-semibold hover:bg-[#142e1d] transition flex items-center gap-2">
                            Submit <span>→</span>
                        </button>
                    @endif
                @endguest
            </div>
        </form>
    </div>

    {{-- BAGIAN BACKGROUND GAMBAR (Tidak Berubah) --}}
    <div class="flex-1 relative flex flex-col justify-center items-center overflow-hidden">
        <img src="{{ asset('images/contactbanner.png') }}" alt="Contact Background" class="absolute inset-0 w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/60"></div>
        <div class="relative z-10 flex w-full px-20">
            <div class="flex flex-col gap-4 text-xl">
                <img src="{{ asset('images/CasaVerdeLogo.png') }}" alt="Casa Verde" class="h-32">
                <a href="#home" class="hover:text-white">Home</a>
                <a href="#about" class="hover:text-white">About</a>
                <a href="#facilities" class="hover:text-white">Facilities</a>
                <a href="#contact" class="hover:text-white">Contact</a>
            </div>
        </div>
    </div>

    {{-- FOOTER KECIL (Tidak Berubah) --}}
    <div class="relative bg-[#003703] py-6 px-10 text-xs text-gray-400 flex justify-between items-center">
        <div class="w-1/4 text-xl leading-tight">
            <p>From your stay, your plans, to your experiences <br> everything handled in one step.</p>
        </div>
        <div class="absolute left-1/2 -translate-x-1/2 flex gap-12">
            <img src="{{ asset('images/agoda.png') }}" class="h-10 opacity-50">
            <img src="{{ asset('images/traveloka.png') }}" class="h-10 opacity-50">
            <img src="{{ asset('images/booking.png') }}" class="h-10 opacity-50">
        </div>
        <div class="text-xs md:text-sm opacity-90 font-light text-center md:text-right">
            <p>Book now! Travel effortlessly.</p>
        </div>
    </div>
    <div class="text-center justify-center opacity-50 text-xs py-4 bg-[#1a3c26]">
        <p>Copyright 2026 Casa Verde Guesthouse reserved</p>
    </div>

    {{-- SCRIPT --}}
    <script>
    function setRating(rating) {
        document.getElementById('ratingInput').value = rating;
        for (let i = 1; i <= 5; i++) {
            const star = document.getElementById(`star-${i}`);
            if (i <= rating) {
                star.classList.remove('text-black/30');
                star.classList.add('text-yellow-400');
            } else {
                star.classList.remove('text-yellow-400');
                star.classList.add('text-black/30');
            }
        }
    }
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        @if(session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: '{{ session('success') }}',
                confirmButtonColor: '#1a3c26',
                confirmButtonText: 'Oke'
            });
        @endif

        @if(session('error'))
            Swal.fire({
                icon: 'warning',
                title: 'Gagal Mengirim',
                text: '{{ session('error') }}',
                confirmButtonColor: '#1a3c26'
            });
        @endif
    </script>
</section>