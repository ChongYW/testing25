@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Post list') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="/p/create">Create posts</a>
                    <br>
                    <hr>

                    @foreach ($allPosts as $post)
                        <div class="row" >
                            <p>{{ $post -> user -> name }}</p>
                            <a href="/p/{{ $post -> id }}">
                                <p class="h2">{{ $post -> title }}</p>
                            </a>
                            <br>
                            <h3>{{ $post -> description }}</h3>
                            <br>
                            <br>
                            <br>
                            <div class="row justify-content-center mb-1">
                                <div class="col-md-10">
                                    <div class="card">
                                        <div class="card-header">Comments</div>
                                        <div class="card-body">
                                            <p>
                                                <span class="badge badge-pill badge-dark">Ali Commented:</span> hey nice pic!
                                            </p>
                                            <p>
                                                <span class="badge badge-pill badge-light">Ali Commented:</span> hey nice pic!
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <add-comment :userid="{{ $post -> user -> id }}" :postid="{{ $post -> id }}"></add-comment>
                            <hr>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
