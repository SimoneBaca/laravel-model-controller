@extends ('layouts.main')

@section('content')
<ul class="list-group">
    @foreach ($movies as $movie )
        <li class="list-group-item">{{ $movie->title }}, nome originale: {{ $movie->original_title }}</li>
    @endforeach
</ul>
@endsection