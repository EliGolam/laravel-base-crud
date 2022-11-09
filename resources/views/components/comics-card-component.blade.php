{{-- Dump for testing purposes --}}
{{-- @dump($comic) --}}

<article class="card">
    <div class="card-info">
        <h3>{{ $comic->title }}</h3>
        <p>{{ $comic->series }}</p>
        <a href="{{ route('comics.show', $comic->id) }}">Show More</a>
        <a href="{{ route('comics.edit', $comic->id) }}">Edit</a>


        @include('partials.delete-comic-form')
    </div>

    <img src="{{ $comic->thumb }}" alt="Cover of {{ $comic->title }}">
</article>
