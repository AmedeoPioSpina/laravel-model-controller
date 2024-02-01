@extends('layouts.app')

@section('main-content')
    <h1>
        Movies
    </h1>

    <ul>
        @forelse($movies as $movie)
            <li>
                <p>
                    {{$movie -> title}}
                </p>
                <p>
                    {{$movie -> original_title}}
                </p>
                <p>
                    {{$movie -> nationality}}
                </p>
                <p>
                    {{$movie -> date}}
                </p>
                <p>
                    {{$movie -> vote}}
                </p>
            </li>
        @empty
            <li>
                No movies available
            </li>
        @endforelse
    </ul>
@endsection