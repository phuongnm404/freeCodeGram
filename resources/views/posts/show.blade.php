@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8"> 
            <img src="/storage/{{$post->image}}" alt="" class="w-100">
        </div>
        <div class="col-4">
            <div class="d-flex">
                <div >
                    <div class="mr-2 align-items-center">
                        <img src="/storage/{{$post->user->profile->image}}" alt="" class="w-100 rounded-circle" style="max-height: 25px;">
                    </div>
                </div>
                <div class="font-weight-bold d-flex" style="width: 100%;">
                    <a href="/profile/{{$post->user->id}}"><p class="text-dark mr-3"><strong>{{$post->user->username}}</strong></p></a>
                    <a href=""><span>Follow</span></a>
                </div>   
            </div>
            <hr>
            <p><strong><span>{{$post->user->username}}</span></strong>  {{$post->caption}}</p>
        </div>
        
    </div>
  
</div>
@endsection