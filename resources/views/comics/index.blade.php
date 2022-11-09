{{-- Debug --}}
{{-- @dd($comics) --}}


@extends('layouts.primary-layout', ['pageTitle' => 'List of Comic Books'])


@section('main')

    <section>
        <h2>List of Comic Books</h2>

        <a href="/">Back to Home Page</a>

        {{-- Dynamically generate Comic Books from data retrieved from Database --}}
        @foreach ($comics as $comic)
            <x-comics-card-component :comic="$comic" />
        @endforeach
    </section>

@endsection
