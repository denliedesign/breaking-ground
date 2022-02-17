
            <!-- FORM -->
            <form action="/combos" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="comboName">Page Name</label>
                    <input id="comboName" type="text" class="form-control" name="comboName"
                           value="{{ old('comboName', $combo->comboName) }}">
                    <div>{{ $errors->first('comboName') }}</div>
                </div>

                <div class="form-group">
                    <label for="comboSection">Section Letter</label>
                    <input id="comboSection" type="text" class="form-control" name="comboSection"
                           value="{{ old('comboSection', $combo->comboSection) }}">
                    <div>{{ $errors->first('comboSection') }}</div>
                </div>

                <div class="form-group">
                    <label for="comboTag">Tag</label>
                    <input id="comboTag" type="text" class="form-control" name="comboTag"
                           value="{{ old('comboTag', $combo->comboTag) }}">
                    <div>{{ $errors->first('comboTag') }}</div>
                </div>

                <div class="form-group">
                    <label for="comboTitle">Title</label>
                    <input id="comboTitle" type="text" class="form-control" name="comboTitle"
                           value="{{ old('comboTitle', $combo->comboTitle) }}">
                    <div>{{ $errors->first('comboTitle') }}</div>
                </div>

                <div class="form-group">
                    <label for="comboContent">Content</label>
                    <textarea name="comboContent" cols="30" rows="10" class="form-control"
                              id="text-textarea">{{ old('comboContent', $combo->comboContent) }}</textarea>
                    <div>{{ $errors->first('comboContent') }}</div>
                </div>

                <div class="form-group">
                    <label for="comboImage">Image</label>
                    <input type="file" class="form-control-file" name="comboImage">
                    <div>{{ $errors->first('comboImage') }}</div>
                </div>

                <div class="form-group">
                    <label for="comboBtn">Button Text</label>
                    <input id="comboBtn" type="text" class="form-control" name="comboBtn"
                           value="">
                    <div>{{ $errors->first('comboBtn') }}</div>
                </div>
                <div class="form-group">
                    <label for="comboUrl">Button Link</label>
                    <input id="comboUrl" type="text" class="form-control" name="comboUrl"
                           value="">
                    <div>{{ $errors->first('comboUrl') }}</div>
                </div>

                @csrf
                <div class="d-flex justify-content-around mt-2">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
            <!-- END FORM -->

