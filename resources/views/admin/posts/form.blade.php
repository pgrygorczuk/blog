@extends('layouts.app')

@section('content')
<div class="container">
    <x-form action="{{$form_action}}" method="{{$form_method??'POST'}}" :item="$item" :fields="$fields"></x-form>
</div>
@endsection
