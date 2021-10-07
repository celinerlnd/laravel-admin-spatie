@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1>Edit Post</h1>
                    </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (Auth::user())
                        <div class="card-body">
                            <form action="{{ route('posts.update', $post) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="title"> Title </label>
                                    <input type="text" class="form-control" name="title" value="{{ $post->title }}">
                                </div>
                                <div class="form-group">
                                    <label for="title"> Description </label>
                                    <textarea name="desc" cols="20" rows="10"
                                        class="form-control"> {{ $post->desc }}</textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary"> Update Post </button>
                                    <a href="{{ route('posts.index') }}" class="btn btn-danger"> Cancel</a>
                                </div>
                            </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
