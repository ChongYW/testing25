@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Post details') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row" >
                        <p>{{ $post -> user -> name }}</p>
                            <p class="h2">{{ $post -> title }}</p>
                        <br>
                        <h3>{{ $post -> description }}</h3>
                        <br>
                        <hr>
                    </div>

                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
