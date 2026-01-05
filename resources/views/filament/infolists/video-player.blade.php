@if($getState())
    <video controls width="100%" style="border-radius: 8px;">
        <source src="{{ asset('storage/' . $getState()) }}" type="video/mp4">
        Browser Anda tidak mendukung tag video.
    </video>
@else
    <p class="text-gray-500">Tidak ada video</p>
@endif