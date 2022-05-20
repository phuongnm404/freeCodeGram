@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row col-6">
        <img src="/storage/{{$post->image}}" alt="" class="w-100">
        <p>{{$post->caption}}</p>
    </div>
</div>
@endsection