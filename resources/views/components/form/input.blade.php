<div class="row mb-3">
    <div class="col-3">
        <label class="col-form-label" for="input-{{$name}}">
            {{ $label }}
        </label>
    </div>
    <div class="col-9">
        <input class="form-control" type="text" id="input-{{$name}}" name="{{$name}}" value="{{$slot}}"></input>
    </div>
</div>