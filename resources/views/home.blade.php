@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-3 pr-5 p-3">
            <img src="/img/personal_user.jpg" alt="" class="rounded-circle w-100">
        </div>
        <div class="col-lg-9">
            <div>
                <h1>{{ $user->username}}</h1>
            </div>
            <div><a href="">Edit Profile</a></div>
            <div class="d-flex">
                <div class="pr-3"> <strong>117 </strong> posts </div>
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
        
    </div>
</div>
@endsection
