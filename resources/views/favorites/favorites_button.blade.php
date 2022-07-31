@if (!Auth::user()->is_my_post($micropost->id))
    @if (Auth::user()->is_favorite_already($micropost->id))
        {{-- {!! Form::open(['route' => ['microposts/{id}/favorites', $micropost->id], 'method' => 'delete']) !!} --}}
        {!! Form::open(['route' => ['favorites.destroy', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfavorite', ['class' => "btn btn-warning btn-sm"]) !!}
        {!! Form::close() !!}
    @else
        {{-- {!! Form::open(['route' => ['microposts/{id}/favorites', $micropost->id]]) !!} --}}
        {!! Form::open(['url' => "favorites?id={$micropost->id}"]) !!}
            {!! Form::submit('Favorite', ['class' => "btn btn-primary btn-sm"]) !!}
        {!! Form::close() !!}
    @endif
@endif
