<div class="row">
    <div class="col-3">
        <label for="textarea-{{$name}}">
            {{ $label }}
        </label>
    </div>
    <div class="col-9">
        <textarea id="textarea-{{$name}}" name="{{$name}}">
            {{ $slot }}
        </textarea>
    </div>
</div>