{{-- Debug --}}
{{-- @dd($comics) --}}


@extends('layouts.primary-layout', ['pageTitle' => 'List of Comic Books'])


@section('main')

    <section>
        <h2>Popular</h2>

        {{-- Dynamically generate Comic Books from data retrieved from Database --}}
        @foreach ($comics as $comic)
            <x-comics-card-component :comic="$comic" />
        @endforeach
    </section>

@endsection
