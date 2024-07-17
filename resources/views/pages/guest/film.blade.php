@extends('layouts.app')

@section('title-page', 'Lista Film')

@section('main-content')
    <main>
        <section>
            <ul>
                @foreach ($movies as $movie )
                    <li>
                        <pre>
                            {{$movie->id}} : {{$movie->title}}
                            Titolo originale: {{$movie->original_title}}
                            Nazionalità: {{$movie->nationality}}
                            Data di uscita: {{$movie->date}}
                            Voto Imdb: {{$movie->vote}}
                        </pre>
                    </li>
                @endforeach
            </ul>

            <div>
                <a href="{{route('guest-home')}}">Torna alla home we</a>
            </div>
        </section>
    </main>
@endsection
