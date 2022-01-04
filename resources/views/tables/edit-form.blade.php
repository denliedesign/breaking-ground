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
