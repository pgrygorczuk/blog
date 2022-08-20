@extends('layouts.app')

@section('content')
<div class="container">
    <x-form action="{{url('admin/posts/store')}}" :item="$item" :fields="$fields"></x-form>
</div>
@endsection
