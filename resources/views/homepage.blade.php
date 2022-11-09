@extends('layouts.primary-layout', ['pageTitle' => $pageTitle])

{{-- DUMP For Debug --}}
{{-- @dump($comicsData) --}}

@section('main')

    <section>
        <h2>Popular</h2>

        {{-- Dynamically generate Comic Books from data retrieved from Database --}}
        @foreach ($comicsData as $comic)
            <x-comics-card-component :comic="$comic" />
        @endforeach
    </section>

    <div>
        <a href="{{ route('comics.create') }}">Add New Comic</a>
    </div>

@endsection
