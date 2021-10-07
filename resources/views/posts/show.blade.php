@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1>Post Detail</h1>
                    </div>
                    @if (Auth::user())
                        <div class="card-body">
                        @csrf
                            <div class="form-group">
                                <label for="title"> Title </label>
                                <input readonly type="text" class="form-control" name="title" value="{{ $post->title }}">
                            </div>
                            <div class="form-group">
                                <label for="title"> Description </label>
                                <textarea readonly name="description" cols="20" rows="10"
                                    class="form-control"> {{ $post->desc }}</textarea>
                            </div>
                            <div class=" form-group">
                                <a href="{{ route('posts.index') }}" class="btn btn-primary"> Back</a>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
