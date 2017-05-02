<div class="breadcrumbs title is-5">
    @foreach($links as $title => $link)
        @if (! $loop->last)
            <a href="{{ $link }}">{{ $title }}</a>
            <li class="fa fa-angle-right fa-fw"></li>
        @else
            <span>{{ is_int($title) ? $link : $title }}</span>
        @endif
    @endforeach
</div>