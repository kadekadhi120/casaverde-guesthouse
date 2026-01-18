<section id="home" class="h-[100dvh] w-full snap-start relative flex flex-col overflow-hidden bg-cover bg-center">
    <div class="absolute inset-0 bg-black/40 z-0"></div>

    <div class="flex-1 w-full relative z-10 overflow-hidden flex items-center justify-center">

        @if($banner && $banner->video)
            <video class="w-full h-full object-cover" autoplay loop muted playsinline
                poster="{{ asset('images/homebanner.png') }}">
                <source src="{{ Storage::url($banner->video) }}" type="video/mp4">

                Browser Anda tidak mendukung tag video.
            </video>
        @else
            <img src="{{ asset('images/homebanner.png') }}" alt="Main Banner" class="w-full h-full object-cover">
        @endif
        <div class="absolute bottom-4 left-6 md:left-12 text-white z-30">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 md:h-20 md:w-20" viewBox="0 0 24 24"
                fill="currentColor">
                <path
                    d="M14.017 21L14.017 18C14.017 16.8954 14.9124 16 16.017 16H19.017C19.5693 16 20.017 15.5523 20.017 15V9C20.017 8.44772 19.5693 8 19.017 8H15.017C14.4647 8 14.017 8.44772 14.017 9V11C14.017 11.5523 13.5693 12 13.017 12H12.017V5H22.017V15C22.017 18.3137 19.3307 21 16.017 21H14.017ZM5.0166 21L5.0166 18C5.0166 16.8954 5.91203 16 7.0166 16H10.0166C10.5689 16 11.0166 15.5523 11.0166 15V9C11.0166 8.44772 10.5689 8 10.0166 8H6.0166C5.46432 8 5.0166 8.44772 5.0166 9V11C5.0166 11.5523 4.56889 12 4.0166 12H3.0166V5H13.0166V15C13.0166 18.3137 10.3303 21 7.0166 21H5.0166Z">
                </path>
            </svg>
        </div>
    </div>

    <div class="relative bg-[#003703] py-6 px-10 text-xs text-gray-400 flex justify-between items-center">
        <div class="w-1/4 text-xl leading-tight">
            <p>From your stay, your plans, to your experiences <br> everything handled in one step.</p>
        </div>

        <div class="absolute left-1/2 -translate-x-1/2 flex gap-12">
            <a href="https://www.agoda.com/id-id/casa-verde-guest-house/hotel/all/bali-id.html?countryId=192&finalPriceView=1&isShowMobileAppPrice=false&cid=1918349&numberOfBedrooms=&familyMode=false&adults=2&children=0&rooms=1&maxRooms=0&checkIn=2026-03-4&isCalendarCallout=false&childAges=&numberOfGuest=0&missingChildAges=false&travellerType=1&showReviewSubmissionEntry=false&currencyCode=IDR&isFreeOccSearch=false&los=1&searchrequestid=757be7f9-310c-42a5-a845-adfb06c5c68e&ds=qsOGhj3E%2BxHqS1KD"
                target="_blank" rel="noopener noreferrer">
                <img src="{{ asset('images/agoda.png') }}"
                    class="h-10 opacity-50 transition-all duration-300 ease-in-out hover:opacity-100 hover:scale-110 hover:drop-shadow-md cursor-pointer">
            </a>

            <a href="https://www.traveloka.com/id-id/hotel/indonesia/casa-verde-guest-house-9000005576219"
                target="_blank" rel="noopener noreferrer">
                <img src="{{ asset('images/traveloka.png') }}"
                    class="h-10 opacity-50 transition-all duration-300 ease-in-out hover:opacity-100 hover:scale-110 hover:drop-shadow-md cursor-pointer">
            </a>

            <a href="https://www.booking.com/hotel/id/casa-verde-guest-house.id.html?aid=1893449&label=metagha-link-LUID-hotel-11714646_dev-desktop_los-1_bw-45_dow-Wednesday_defdate-1_room-0_gstadt-2_rateid-public_aud-0_gacid-21404703723_mcid-50_bc-ALLAVg_ppa-0_clrid-0_ad-1_gstkid-0_checkin-20260304_ppt-B_lp-2360_r-17358388965635587110&sid=8e01762c67d2b8b327372a1b3a91d597&all_sr_blocks=1171464601_390603100_2_2_0&checkin=2026-03-04&checkout=2026-03-05&dest_id=11714646&dest_type=hotel&dist=0&group_adults=2&group_children=0&hapos=1&highlighted_blocks=1171464601_390603100_2_2_0&hpos=1&matching_block_id=1171464601_390603100_2_2_0&no_rooms=1&req_adults=2&req_children=0&room1=A%2CA&sb_price_type=total&sr_order=popularity&sr_pri_blocks=1171464601_390603100_2_2_0__40500000&srepoch=1768749858&srpvid=f3a36c4d2b6e0393&type=total&ucfs=1&chal_t=1768750088528&force_referer="
                target="_blank" rel="noopener noreferrer">
                <img src="{{ asset('images/booking.png') }}"
                    class="h-10 opacity-50 transition-all duration-300 ease-in-out hover:opacity-100 hover:scale-110 hover:drop-shadow-md cursor-pointer">
            </a>
        </div>

        <div class="text-xs md:text-sm opacity-90 font-light text-center md:text-right">
            <p>Book now! Travel effortlessly.</p>
        </div>
    </div>
</section>