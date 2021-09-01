@can('update', \App\Photo::class)

    <div class="mx-2">
        <form action="/photos/{{ $photo->id }}" method="POST">
            @method('DELETE')
            @csrf

            <button class="btn btn-danger ml-4" type="submit">Delete</button>
        </form>
    </div>

@endcan
