<div class="x-breadcrumb-container">
    <div class="container">
        <ol class="breadcrumb hidden-xs">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">{{ 'Home' }}</a></li>
            @foreach($items ?: [] as $item)
                @if(!$item == null)
                    @if($loop->last)
                        <li class="breadcrumb-item">{{ $item['label'] }}</li>
                    @else
                        <li class="breadcrumb-item"><a href="{{ $item['link'] }}">{{ $item['label'] }}</a></li>
                    @endif
                @endif
            @endforeach
        </ol>
    </div>
</div>
