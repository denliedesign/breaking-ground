<div class="modal fade" data-bs-backdrop="static" id="txtModal" tabindex="-1" aria-labelledby="txtModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content p-3">
            <!-- FORM -->
            <form action="/texts" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Page Name</label>
                    <input id="name" type="text" class="form-control" name="name"
                           value="">
                    <div>{{ $errors->first('name') }}</div>
                </div>

                <div class="form-group">
                    <label for="section">Section Letter</label>
                    <input id="section" type="text" class="form-control" name="section"
                           value="">
                    <div>{{ $errors->first('section') }}</div>
                </div>

                <div class="form-group">
                    <label for="content">Text Content</label>
                    <textarea name="content" cols="30" rows="10" class="form-control"
                              id="txt-textarea"></textarea>
                    <div>{{ $errors->first('content') }}</div>
                </div>

                @csrf
                <div class="d-flex justify-content-around mt-2">
                    <button type="submit" class="btn btn-primary">Add Text</button>
                    <button type="button" class="btn btn-secondary" onClick="window.location.reload();">Close</button>
                </div>
            </form>
            <!-- END FORM -->
        </div>
    </div>
</div>
