<form method="POST" action="{{$action}}">

    @csrf
    @method($method)

    @foreach($fields as $field => $opts)

        @if($opts['type'] == 'textarea' || $opts['type'] == 'texteditor')
            <x-form.textarea label="{{$opts['display_as']}}" name="{{$field}}">
                {{ old($field, $item->getAttribute($field)) }}
            </x-form.textarea>

        @elseif($opts['type'] == 'input')
            <x-form.input label="{{$opts['display_as']}}" name="{{$field}}">
                {{ old($field, $item->getAttribute($field)) }}
            </x-form.input>

        @elseif($opts['type'] == 'foreign' || $opts['type'] == 'select')
            <x-form.select label="{{$opts['display_as']}}" name="{{$field}}"
                :options="$item->{$opts['options']}()" selected="{{$item->getAttribute($field)}}">
            </x-form.select>
            
        @else
            <x-form.input label="{{$opts['display_as']}}" name="{{$field}}">
                {{ old($field, $item->getAttribute($field)) }}
            </x-form.input>
        @endif

    @endforeach
    <input class="btn btn-primary" type="submit">

</form>

