<!-- FORM -->
<form action="/tables" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="tableName">Page Name</label>
        <input id="tableName" type="text" class="form-control" name="tableName"
               value="{{ old('tableName', $table->tableName) }}">
        <div>{{ $errors->first('tableName') }}</div>
    </div>

    <div class="form-group">
        <label for="tableSection">Section Letter</label>
        <input id="tableSection" type="text" class="form-control" name="tableSection"
               value="{{ old('tableSection', $table->tableSection) }}">
        <div>{{ $errors->first('tableSection') }}</div>
    </div>

    <div class="form-group">
        <label for="title">Table Title</label>
        <input id="title" type="text" class="form-control" name="title"
               value="{{ old('title', $table->title) }}">
        <div>{{ $errors->first('title') }}</div>
    </div>

    <div class="form-group">
        <label for="head1">Heading 1</label>
        <input id="head1" type="text" class="form-control" name="head1"
               value="{{ old('head1', $table->head1) }}">
        <div>{{ $errors->first('head1') }}</div>
    </div>

    <div class="form-group">
        <label for="head2">Heading 2</label>
        <input id="head2" type="text" class="form-control" name="head2"
               value="{{ old('head2', $table->head2) }}">
        <div>{{ $errors->first('head2') }}</div>
    </div>

    <div class="form-group">
        <label for="head3">Heading 3</label>
        <input id="head3" type="text" class="form-control" name="head3"
               value="{{ old('head3', $table->head3) }}">
        <div>{{ $errors->first('head3') }}</div>
    </div>

    <div class="form-group">
        <label for="head4">Heading 4</label>
        <input id="head4" type="text" class="form-control" name="head4"
               value="{{ old('head4', $table->head4) }}">
        <div>{{ $errors->first('head4') }}</div>
    </div>

    <div class="form-group">
        <label for="col1">Column 1</label>
        <input id="col1" type="text" class="form-control" name="col1"
               value="{{ old('col1', $table->col1) }}">
        <div>{{ $errors->first('col1') }}</div>
    </div>

    <div class="form-group">
        <label for="col2">Column 2</label>
        <input id="col2" type="text" class="form-control" name="col2"
               value="{{ old('col2', $table->col2) }}">
        <div>{{ $errors->first('col2') }}</div>
    </div>

    <div class="form-group">
        <label for="col3">Column 3</label>
        <input id="col3" type="text" class="form-control" name="col3"
               value="{{ old('col3', $table->col3) }}">
        <div>{{ $errors->first('col3') }}</div>
    </div>

    <div class="form-group">
        <label for="col4">Column 4</label>
        <input id="col4" type="text" class="form-control" name="col4"
               value="{{ old('col4', $table->col4) }}">
        <div>{{ $errors->first('col4') }}</div>
    </div>

    @csrf
    <div class="d-flex justify-content-around mt-2">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>
<!-- END FORM -->
