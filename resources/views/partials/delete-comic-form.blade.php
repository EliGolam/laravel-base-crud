<form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
    @csrf
    @method('DELETE')

    <button type="submit" onclick="return confirm('Are you sure you want to delete the entry?\nWarning: This action is irreversible')">Delete</button>
</form>
