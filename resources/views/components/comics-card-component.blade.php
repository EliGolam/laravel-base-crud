{{-- Dump for testing purposes --}}
{{-- @dump($comic) --}}

<article class="card">
    <div class="card-info">
        <h3>{{ $comic->title }}</h3>
        <p>{{ $comic->series }}</p>
        <a href="{{ route('comics.show', $comic->id) }}">Show More</a>
        <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
            @csrf
            @method('DELETE')

            <button type="submit" onclick="return confirm('Are you sure you want to delete the entry?\nWarning: This action is irreversible')">Delete</button>
        </form>
    </div>

    <img src="{{ $comic->thumb }}" alt="Cover of {{ $comic->title }}">
</article>
