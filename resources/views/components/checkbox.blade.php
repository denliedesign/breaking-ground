<div class="col-lg my-2">
    <row>
        <input type="checkbox" class="col-2 form-check-input" id="{{ preg_replace('/\s/', '_', $info, 1) }}" name="{{ $category }}[]" value="{{ ucfirst($info) }}">
        <label class="col-10 form-check-label" for="{{ preg_replace('/\s/', '_', $info, 1) }}">{{ ucfirst($info) }}</label>
    </row>
</div>
