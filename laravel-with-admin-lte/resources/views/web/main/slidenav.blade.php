@inject('slides', 'App\Services\SlideShowService')

<div class="container-fluid p-r-l-0" style="position: relative;">
    <div class="navbar-header__cover">
        @foreach($slides->findSlides()->slides as $slide)
            <img data-u="image" src="{{ asset($slide->photo->file) }}" />
        @endforeach
    </div>
    <div class="green-line"></div>

    @include('web.main.nav')
</div>
