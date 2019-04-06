@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <li class="nav-item active">
                        <a class="nav-link" href="/buy">Home <span class="sr-only">(current)</span></a>
                      </li>

                    <a href="/posts/create" class="btn btn-primary"> SELL </a>
                    
                                        <h3> Your  Posts</h3>
                    @if(count($posts)>0)
                    <table class="table table-striped">
                        <tr>
                            <th>Title</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach($posts as $post)

                        <tr>
                            <th>{{$post->title}}</th>
                            <th><a href="/posts/{{$post->id}}/edit"class="btn btn-default">Edit</a></th>
                            <th> </th>
                        </tr>
                        @endforeach 
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
