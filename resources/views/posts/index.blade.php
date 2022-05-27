@extends('layouts.app')

@section('content')
<div class="container">
   @foreach($posts as $post)
        <div class="row">
                <div class="col-8 offset-2"> 
                    <img src="/storage/{{$post->image}}" alt="" class="w-100">
                </div>
        </div>
        <div class="row ">
            <div class="col-8 offset-2">
                <p><strong><span>{{$post->user->username}}</span></strong>  {{$post->caption}}</p>
            </div>
        </div> 
  
        </div>
   @endforeach
</div>
@endsection