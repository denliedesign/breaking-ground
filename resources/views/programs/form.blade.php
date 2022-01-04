 <!-- FORM -->
            <form action="/programs" method="POST" enctype="multipart/form-data">

                <div class="form-group text-muted mb-3" style="font-size: 0.75em;">
                    <label for="id">Order Number</label>
                    <input id="id" type="text" class="form-control text-muted" name="id" style="font-size: 0.75em;"
                           value="{{ old('id', $program->id) }}">
                    <div>{{ $errors->first('id') }}</div>
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <select class="form-control" name="category" id="category">
                        <option value="program">Program</option>
                        <option value="intensive">Intensive</option>
{{--                        <option value="ensemble">Performing Ensemble</option>--}}
{{--                        <option value="company">Competitive Company</option>--}}
                    </select>
                </div>
                <div class="form-group">
                    <label for="programTitle">Title</label>
                    <input id="programTitle" type="text" class="form-control" name="programTitle"
                           value="{{ old('programTitle', $program->programTitle) }}">
                    <div>{{ $errors->first('programTitle') }}</div>
                </div>
                <div class="form-group">
                    <label for="programAge">Age</label>
                    <input id="programAge" type="text" class="form-control" name="programAge"
                           value="{{ old('programAge', $program->programAge) }}">
                    <div>{{ $errors->first('programAge') }}</div>
                </div>

                <div class="form-group">
                    <label for="programDescription">Description</label>
                    <textarea name="programDescription" cols="30" rows="10" class="form-control"
                              id="text-textarea">{{ old('programDescription', $program->programDescription) }}</textarea>
                    <div>{{ $errors->first('programDescription') }}</div>
                </div>

                <div class="form-group">
                    <label for="programImage">Image</label>
                    <input type="file" class="form-control-file" name="programImage">
                    <div>{{ $errors->first('programImage') }}</div>
                </div>
                <div class="form-group">
                    <label for="programBanner">Banner</label>
                    <input type="file" class="form-control-file" name="programBanner">
                    <div>{{ $errors->first('programBanner') }}</div>
                </div>
{{--                <div class="form-group">--}}
{{--                    <label for="programVideo">Video</label>--}}
{{--                    <input type="file" class="form-control-file" name="programVideo">--}}
{{--                    <div>{{ $errors->first('programVideo') }}</div>--}}
{{--                </div>--}}
                <div class="form-group">
                    <label for="programVideo">Video</label>
                    <textarea name="programVideo" cols="30" rows="10" class="form-control"
                              id="iframe-textarea">{{ old('programVideo', $program->programVideo) }}</textarea>
                    <div>{{ $errors->first('programVideo') }}</div>
                </div>

                @csrf
                <div class="d-flex justify-content-around mt-2">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
            <!-- END FORM -->
