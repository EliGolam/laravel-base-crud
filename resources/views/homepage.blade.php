@extends('layouts.primary-layout', ['pageTitle' => $pageTitle])

{{-- DUMP For Debug --}}
{{-- @dump($comicsData) --}}

@section('main')

    @foreach ($comicsData as $comic)

        <article>
            <x-comics-card-component :comic="$comic" />
        </article>

    @endforeach

@endsection
