@extends('layouts.app')

@section('content')
<div class="container">
   
   <form action="/profile/ {{$user->id}} " method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="row">
            <div class="col-8 offset-2">
                <h1>Edit Your Profile</h1>

                <div class="form-group row">
                    <label for="title" class="col-form-label text-md-right">{{ __('Edit title') }}</label>
                    <div class="col-md-12">
                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') ?? $user->profile->title }}"  autocomplete="title" autofocus>
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="description" class="col-form-label text-md-right">{{ __('Edit description') }}</label>
                    <div class="col-md-12">
                        <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') ?? $user->profile->description  }}"  autocomplete="description" autofocus>
                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="url" class="col-form-label text-md-right">{{ __('Edit url') }}</label>
                    <div class="col-md-12">
                        <input id="url" type="text" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ old('url')  ?? $user->profile->url }}"  autocomplete="url" autofocus>
                        @error('url')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row pt-3">
                    <button class="btn btn-primary">Save Profile</button>
                </div>
            </div>
        </div>  
   </form>
   
</div>
@endsection