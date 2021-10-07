@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1>POST LIST</h1>
                    </div>
                    @if (Auth::user())
                    @role('writer|admin')
                        <a href="{{ route('posts.create') }}" class="btn btn-primary"> Create Post </a>
                        @endrole
                        <div class="panel-body">
                            <table class="table table-striped">
                                <thead>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th> Action </th>
                                </thead>
                                <tbody>
                                    @if (count($posts) == 0)
                                        {{-- expr --}}
                                        <tr>
                                            <td colspan="12">
                                                <center>Data Unavailable</center>
                                            </td>
                                        </tr>
                                    @endif
                                    @foreach ($posts as $p)
                                        <tr>
                                            <td>{{ $p->id }}</td>
                                            <td>{{ $p->title }}</td>
                                            <td>{{ $p->desc }}</td>
                                            <td>
                                                <form action="{{ route('posts.destroy', $p) }}" method="POST">
                                                    <a href="{{ route('posts.show', $p) }}" class="btn btn-primary"> Show
                                                    </a>
                                                    @role('editor|admin')
                                                    <a href="{{ route('posts.edit', $p) }}" class="btn btn-success"> Edit
                                                    </a>
                                                    @endrole
                                                    @csrf
                                                    @method ('DELETE')
                                                    <button type="submit" class="btn btn-danger"
                                                        onclick="return confirm('Are you sure?')">
                                                        Delete </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <center>{{ $posts->links() }}</center>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
