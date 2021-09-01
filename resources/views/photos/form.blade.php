<div class="modal fade" data-bs-backdrop="static" id="photoModal" tabindex="-1" aria-labelledby="photoModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content p-3">
            <!-- FORM -->
            <form action="/photos" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="photoName">Page Name</label>
                    <input id="photoName" type="text" class="form-control" name="photoName"
                           value="">
                    <div>{{ $errors->first('photoName') }}</div>
                </div>

                <div class="form-group">
                    <label for="photoSection">Section Letter</label>
                    <input id="photoSection" type="text" class="form-control" name="photoSection"
                           value="">
                    <div>{{ $errors->first('photoSection') }}</div>
                </div>

                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control-file" name="image">
                    <div>{{ $errors->first('image') }}</div>
                </div>

                @csrf
                <div class="d-flex justify-content-around mt-2">
                    <button type="submit" class="btn btn-primary">Add Image</button>
                    <button type="button" class="btn btn-secondary" onClick="window.location.reload();">Close</button>
                </div>
            </form>
            <!-- END FORM -->
        </div>
    </div>
</div>
