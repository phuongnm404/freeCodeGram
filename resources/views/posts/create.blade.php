@extends('layouts.app')

@section('content')
<div class="container">
   <form action="/p" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-8 offset-2">
                <h1>Add New Post</h1>
                <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label text-md-right">{{ __('Post Caption') }}</label>
                    <div class="col-md-12">
                        <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}"  autocomplete="caption" autofocus>
                        @error('caption')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Post Image') }}</label>
                    <input type="file" class="form-control-file" id = "image" name = "image">
                    @error('image')
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>
                <div class="row pt-3">
                    <button class="btn btn-primary">Add new post</button>
                </div>
            </div>
        </div>  
   </form>
   
</div>
@endsection