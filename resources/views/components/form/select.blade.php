<div class="row mb-3">
    <div class="col-3">
        <label class="col-form-label" for="select-{{$name}}">
            {{ $label }}
        </label>
    </div>
    <div class="col-9">
        <select class="form-select @error($name) is-invalid @enderror" id="select-{{$name}}" name="{{$name}}">
            @foreach($options as $key => $value)
                <option value="{{$key}}" {{ $key==$selected? 'selected': '' }}>
                    {{$value}}
                </option>
            @endforeach
        </select>
        @error($name)
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>