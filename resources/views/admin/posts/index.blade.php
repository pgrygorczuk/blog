@extends('layouts.app')

@section('content')
<div class="container">
    <x-grid :items="$items" :fields="$fields"></x-grid>
</div>
@endsection

