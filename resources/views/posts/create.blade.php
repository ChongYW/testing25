@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create post') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="/p" method="POST">
                        @csrf

                        <div class="row">
                            <p class="h3">Create post</p>
                        </div>

                        <div class="row">
                            <label for="title" class="col-md-4 col-form-label">{{ __('Post title') }}</label>

                            <input name="title" id="title" type="text" class="form-control @error('title') is-invalid @enderror">
                        
                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="row">
                            <label for="description" class="col-md-4 col-form-label">{{ __('Post description') }}</label>

                            <input name="description" id="description" type="text" class="form-control @error('description') is-invalid @enderror">
                        
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <br>
                        <button class="btn btn-primary">Post</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
