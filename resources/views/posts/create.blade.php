@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create Post') }}</div>
                    
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="/post" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="title" class="form-label">Post Title</label>
                                <input type="text" name="title" class="form-control form-control-lg"
                                    placeholder="Enter title">
                            </div>


                            <div class="form-group">
                                <label for="body" class="form-label">Post Body</label>
                                <textarea name="body" id="body" cols="30" rows="10" class="form-control" placeholder="Enter body"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="published_at" class="form-label">Publish At</label>
                                <input type="date" name="published_at" id="published_at" class="form-control"
                                    placeholder="Select date">
                            </div>

                            <button type="submit" class="btn btn-primary btn-lg my-btn">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <h2><a href="{{ route('home') }}" style="color: rgb(5, 59, 43); font-size: 15px;"><- Back Home Page</a></h2>

@endsection
