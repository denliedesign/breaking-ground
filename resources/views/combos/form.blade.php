<div class="modal fade" data-bs-backdrop="static" id="comboModal" tabindex="-1" aria-labelledby="comboModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content p-3">
            <!-- FORM -->
            <form action="/combos" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="comboName">Page Name</label>
                    <input id="comboName" type="text" class="form-control" name="comboName"
                           value="">
                    <div>{{ $errors->first('comboName') }}</div>
                </div>

                <div class="form-group">
                    <label for="comboSection">Section Letter</label>
                    <input id="comboSection" type="text" class="form-control" name="comboSection"
                           value="">
                    <div>{{ $errors->first('comboSection') }}</div>
                </div>

                <div class="form-group">
                    <label for="comboTag">Tag (1 word label for instructor)</label>
                    <input id="comboTag" type="text" class="form-control" name="comboTag"
                           value="">
                    <div>{{ $errors->first('comboTag') }}</div>
                </div>

                <div class="form-group">
                    <label for="comboTitle">Title or Link</label>
                    <input id="comboTitle" type="text" class="form-control" name="comboTitle"
                           value="">
                    <div>{{ $errors->first('comboTitle') }}</div>
                </div>

                <div class="form-group">
                    <label for="comboContent">Content</label>
                    <textarea name="comboContent" cols="30" rows="10" class="form-control"
                              id="text-textarea"></textarea>
                    <div>{{ $errors->first('comboContent') }}</div>
                </div>

                <div class="form-group">
                    <label for="comboImage">Image</label>
                    <input type="file" class="form-control-file" name="comboImage">
                    <div>{{ $errors->first('comboImage') }}</div>
                </div>

                @csrf
                <div class="d-flex justify-content-around mt-2">
                    <button type="submit" class="btn btn-primary">Add</button>
                    <button type="button" class="btn btn-secondary" onClick="window.location.reload();">Close</button>
                </div>
            </form>
            <!-- END FORM -->
        </div>
    </div>
</div>
