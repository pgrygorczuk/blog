<div class="row mb-3">
    <div class="col-3">
        <label class="col-form-label" for="textarea-{{$name}}">
            {{ $label }}
        </label>
    </div>
    <div class="col-9">
        <textarea class="form-control" id="textarea-{{$name}}" name="{{$name}}">
            {{ $slot }}
        </textarea>
    </div>
</div>