<div class="container-fluid p-r-l-0" style="position: relative; background-color: #252525;">
    <video poster="{{ asset('video/background_video_poster.png') }}" width="100%" height="100%"
           id="bgvid" playsinline autoplay muted loop>
        <source src="{{ asset('video/background_video_blur.webm') }}" type="video/webm">
        <source src="{{ asset('video/background_video_blur.mp4') }}" type="video/mp4">
        <source src="{{ asset('video/background_video_blur.mp4') }}" type="video/mov">
    </video>

    @include('web.main.nav')
</div>

