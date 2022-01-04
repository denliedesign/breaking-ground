<div class="modal fade" data-bs-backdrop="static" id="tableModal" tabindex="-1" aria-labelledby="tableModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content p-3">
            <!-- FORM -->
            <form action="/tables" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="tableName">Page Name</label>
                    <input id="tableName" type="text" class="form-control" name="tableName"
                           value="">
                    <div>{{ $errors->first('tableName') }}</div>
                </div>

                <div class="form-group">
                    <label for="tableSection">Section Letter</label>
                    <input id="tableSection" type="text" class="form-control" name="tableSection"
                           value="">
                    <div>{{ $errors->first('tableSection') }}</div>
                </div>

                <div class="form-group">
                    <label for="col1">Column 1</label>
                    <input id="col1" type="text" class="form-control" name="col1"
                           value="">
                    <div>{{ $errors->first('col1') }}</div>
                </div>

                <div class="form-group">
                    <label for="col2">Column 2</label>
                    <input id="col2" type="text" class="form-control" name="col2"
                           value="">
                    <div>{{ $errors->first('col2') }}</div>
                </div>

                <div class="form-group">
                    <label for="col3">Column 3</label>
                    <input id="col3" type="text" class="form-control" name="col3"
                           value="">
                    <div>{{ $errors->first('col3') }}</div>
                </div>

                <div class="form-group">
                    <label for="col4">Column 4</label>
                    <input id="col4" type="text" class="form-control" name="col4"
                           value="">
                    <div>{{ $errors->first('col4') }}</div>
                </div>

                @csrf
                <div class="d-flex justify-content-around mt-2">
                    <button type="submit" class="btn btn-primary">Add Table Row</button>
                    <button type="button" class="btn btn-secondary" onClick="window.location.reload();">Close</button>
                </div>
            </form>
            <!-- END FORM -->
        </div>
    </div>
</div>
