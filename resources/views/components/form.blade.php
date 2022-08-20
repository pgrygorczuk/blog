<form method="PUT" action="{{$action}}">
    @foreach($fields as $field => $opts)
        @if($opts['type'] == 'textarea' || $opts['type'] == 'texteditor')
            <x-form.textarea label="{{$opts['display_as']}}" name="{{$field}}">
                {{ $item->getAttribute($field) }}
            </x-form.textarea>
        @else
            <x-form.input label="{{$opts['display_as']}}" name="{{$field}}">
                {{ $item->getAttribute($field) }}
            </x-form.input>
        @endif
    @endforeach
    <input type="submit">
</form>