<!-- FORM -->
<form action="/headings" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="headingName">Page Name</label>
        <input id="headingName" type="text" class="form-control" name="headingName"
               value="{{ old('headingName', $heading->headingName) }}">
        <div>{{ $errors->first('headingName') }}</div>
    </div>

    <div class="form-group">
        <label for="headingSection">Section Letter</label>
        <input id="headingSection" type="text" class="form-control" name="headingSection"
               value="{{ old('headingSection', $heading->headingSection) }}">
        <div>{{ $errors->first('headingSection') }}</div>
    </div>

    <div class="form-group">
        <label for="title">Table Title</label>
        <input id="title" type="text" class="form-control" name="title"
               value="{{ old('title', $heading->title) }}">
        <div>{{ $errors->first('title') }}</div>
    </div>

    <div class="form-group">
        <label for="head1">Heading 1</label>
        <input id="head1" type="text" class="form-control" name="head1"
               value="{{ old('head1', $heading->head1) }}">
        <div>{{ $errors->first('head1') }}</div>
    </div>

    <div class="form-group">
        <label for="head2">Heading 2</label>
        <input id="head2" type="text" class="form-control" name="head2"
               value="{{ old('head2', $heading->head2) }}">
        <div>{{ $errors->first('head2') }}</div>
    </div>

    <div class="form-group">
        <label for="head3">Heading 3</label>
        <input id="head3" type="text" class="form-control" name="head3"
               value="{{ old('head3', $heading->head3) }}">
        <div>{{ $errors->first('head3') }}</div>
    </div>

    <div class="form-group">
        <label for="head4">Heading 4</label>
        <input id="head4" type="text" class="form-control" name="head4"
               value="{{ old('head4', $heading->head4) }}">
        <div>{{ $errors->first('head4') }}</div>
    </div>

    @csrf
    <div class="d-flex justify-content-around mt-2">
        <button type="submit" class="btn btn-primary">Save Heading</button>
    </div>
</form>
<!-- END FORM -->
