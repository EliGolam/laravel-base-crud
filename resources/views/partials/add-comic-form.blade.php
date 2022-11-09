<form action="{{ route('comics.store') }}" method="POST">
    @csrf

    @include('partials.validation-error')

    <div>
        <label for="title">Title</label>
        <input type="text" name="title" id="title" maxlength="150" required placeholder="Comic Title" value="{{ old('title', '') }}" />
    </div>

    <div>
        <label for="series">Series</label>
        <input type="text" name="series" id="series" maxlength="150" placeholder="Comic Series (optional)" />
    </div>

    <div>
        <label for="thumb">Thumbnail (image link)</label>
        <input type="url" name="thumb" id="thumb" placeholder="https://google-image-link.com (optional)" />
    </div>

    <div>
        <label for="type">Comic Book Type</label>
        <input type="text" name="type" id="type" placeholder="Mystery (optional)" />
    </div>

    <div>
        <label for="price">Price</label>
        <input type="number" name="price" id="price" min="0" max="1000" placeholder="10" step="0.01" />
    </div>

    <div>
        <label for="sale_date">Sale Date (optional)</label>
        <input type="date" name="sale_date" id="sale_date" />
    </div>

    <div>
        <label for="description"></label>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>
    </div>

    <button type="submit">Add Comic</button>

</form>

{{-- ['title', 'description', 'thumb', 'price', 'series', 'sale_date', 'type']; --}}
