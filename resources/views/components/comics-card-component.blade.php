{{-- Dump for testing purposes --}}
{{-- @dump($comic) --}}

<article class="card">
    <div class="card-info">
        <h3>{{ $comic->title }}</h3>
        <p>{{ $comic->series }}</p>
    </div>

    <img src="{{ $comic->thumb }}" alt="Cover of {{ $comic->title }}">
</article>
