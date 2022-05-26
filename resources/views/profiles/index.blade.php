@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-3 pr-5 p-3">
            <img src="/storage/{{$user->profile->image}}" alt="" class="rounded-circle w-100">
        </div>
        <div class="col-lg-9">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex">
                    <div class="h1">{{ $user->username}}</div>
                    <follow-button user-id = "{{$user->id}}"></follow-button>

                </div>
                
                <a href="/p/create">Add New Posts</a>
            </div>
            <div><a href="/profile/{{ $user->id }}/edit">Edit Profile</a></div>
            <div class="d-flex">
                <div class="pr-3"> <strong>{{$user->posts->count()}} </strong> posts </div>
                <div class="pr-3"> <strong>67 </strong> followers </div>
                <div class="pr-3"> <strong>12 </strong> following </div>
            </div>
            <div class="pt-3">
                <div><strong>{{$user->profile->title}}</strong></div>
                <div>
                    {{$user->profile->description}}
                </div>
                <div><strong> <a href="{{$user->profile->url}}">{{$user->profile->url}}</a> </strong></div>
            </div>
        </div>
        <div class="row pt-5">
            @foreach ($user->posts as $post)
                <div class="col-4 pb-4">
                    <a href="/p/{{$post->id}}">
                        <img src="/storage/{{ $post->image}}" alt="" class="w-100">
                    </a>
                </div>
            @endforeach


           
        </div>
        
    </div>
</div>
@endsection
