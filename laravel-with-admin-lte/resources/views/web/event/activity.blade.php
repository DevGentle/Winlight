@extends('web.layout')

@section('navbar')
    @include('web.main.slidenav')
@endsection

@section('content')
    <div class="container">
        <div class="row activity">
            <div class="col-md-offset-1 col-md-10 activity__header">ข่าวสารและกิจกรรม<hr class="big"></div>

            @foreach($events as $event)
                <div class="col-md-12 activity__row">
                    <div class="col-md-4 text-right">
                        <img src="{{ asset($event->photo->file) }}" alt="">
                    </div>
                    <div class="col-md-6">
                        <div class="activity__title">{{ $event->title }}</div>
                        <div class="activity__date">{{ date('F d, Y', strtotime($event->created_at)) }}</div>
                        <div class="activity__description">
                            @if($event->content)
                                {{ $event->content }}
                            @else
                                {{ 'No description' }}
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-12"><hr class="small"></div>
            @endforeach
        </div>
        {{--{{  $events->links() }}--}}
    </div>
@endsection
