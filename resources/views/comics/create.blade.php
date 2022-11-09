@extends('layouts.primary-layout')


@section('main')
    <section>
        <h2>Add New Comic book record</h2>
        @include('partials.add-comic-form')
    </section>

    {{-- @if($errors->an) --}}

@endsection
