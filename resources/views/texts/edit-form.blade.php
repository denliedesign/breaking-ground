<!-- FORM -->
<form action="/texts" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="name">Page Name</label>
        <input id="name" type="text" class="form-control" name="name"
               value="{{ old('name', $text->name) }}">
        <div>{{ $errors->first('name') }}</div>
    </div>

    <div class="form-group">
        <label for="section">Section Letter</label>
        <input id="section" type="text" class="form-control" name="section"
               value="{{ old('section', $text->section) }}">
        <div>{{ $errors->first('section') }}</div>
    </div>

    <div class="form-group">
        <label for="content">Text Content</label>
        <textarea name="content" cols="30" rows="10" class="form-control"
                  id="text-textarea">{{ old('content', $text->content) }}</textarea>
        <div>{{ $errors->first('content') }}</div>
    </div>

    @csrf
    <div class="d-flex justify-content-around mt-2">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>
<!-- END FORM -->
