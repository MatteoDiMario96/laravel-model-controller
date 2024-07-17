@extends('layouts.app')

@section('title-page', 'Lista Film')

@section('main-content')
    <main>
        <section>
            <ul class="d-flex justify-content-center flex-wrap">
                @foreach ($movies as $movie )
                    <li id="film_list">
                        <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                            <div class="card-header">{{$movie->id}} </div>
                            <div class="card-body">
                                <h5 class="card-title">{{$movie->title}}</h5>
                                <p class="card-text">
                                    Nazionalità: {{$movie->nationality}}
                                    Data di uscita: {{$movie->date}}
                                    Voto Imdb: {{$movie->vote}}
                                </p>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>

            <div>
                <a href="{{route('guest-home')}}">Torna alla home </a>
            </div>
        </section>




    </main>
@endsection
