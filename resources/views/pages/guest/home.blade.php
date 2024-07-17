@extends('layouts.app')

@section('title-page', 'Scopri i film')

@section('main-content')
    <main>
        <div>
            <h2>
                <h2>Vieni a vedere la nostra collezione di <a href="{{route('guest-film-list')}}">Film</a></h2>
            </h2>
        </div>
    </main>
@endsection
