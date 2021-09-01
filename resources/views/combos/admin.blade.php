@can('update', \App\Combo::class)

    <div class="d-flex d-inline">
        <div class="mx-2">
            <a class="btn btn-secondary" href="/combos/{{ $combo->id }}/edit">Edit</a>
        </div>

        <div class="mx-2">
            <form action="/combos/{{ $combo->id }}" method="POST">
                @method('DELETE')
                @csrf

                <button class="btn btn-danger ml-4" type="submit">Delete</button>
            </form>
        </div>
    </div>

@endcan
