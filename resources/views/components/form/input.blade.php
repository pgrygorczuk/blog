<div class="row">
    <div class="col-3">
        <label for="input-{{$name}}">
            {{ $label }}
        </label>
    </div>
    <div class="col-9">
        <input type="text" id="input-{{$name}}" name="{{$name}}" value="{{$slot}}"></input>
    </div>
</div>