<form action="{{ route('comics.store') }}" method="POST">
    @csrf

    <div>
        <label for="title">Title</label>
        <input type="text" name="title" id="title" maxlength="150" required placeholder="Comic Book Title" />
    </div>

    <div>
        <label for="series">Series</label>
        <input type="text" name="series" id="series" maxlength="150" placeholder="Comic Book Series (optional)" />
    </div>

    <div>
        <label for="thumb">Thumbnail (image link)</label>
        <input type="text" name="thumb" id="thumb" placeholder="https://...google-image-link.com... (optional)" />
    </div>

    <div>
        <label for="price"></label>
        <input type="number" name="price" id="price" min="0" max="1000" placeholder="10" />
    </div>

</form>

{{-- ['title', 'description', 'thumb', 'price', 'series', 'sale_date', 'type']; --}}
