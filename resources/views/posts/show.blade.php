
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color: #00f1a9; font-size: 24px;">{{ __('View Post') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2 style="color: #377735; font-size: 32px; margin-bottom: 20px;">{{$post->title}}</h2>

                    <p style="color: #004e66; font-size: 16px;">Published At: {{date('Y-m-d', strtotime($post->published_at))}}</p>
                    <br>
                    <div style="color: #3c004e; font-size: 30px; line-height: 2;">
                        {!! nl2br(e($post->body)) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<h2><a href="{{ route('home') }}" style="color: rgb(5, 59, 43); font-size: 15px;"><- Back Home Page</a></h2>

@endsection
