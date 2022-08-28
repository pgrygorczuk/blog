<div class="row mb-3">
    <div class="col-3">
        <label class="col-form-label" for="input-{{$name}}">
            {{ $label }}
        </label>
    </div>
    <div class="col-9">
        <input class="form-control @error($name) is-invalid @enderror"
            type="text" id="input-{{$name}}" name="{{$name}}" value="{{$slot}}"></input>
        @error($name)
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>