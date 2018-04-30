@extends('main')

@section('title',' | Create Blog')

@section('content')

<div class="row">
    <div class="col-md-10">
        <h1>All Posts</h1>
    </div>
    <div class="col-md-2">
        <a href="{{ route('posts.create') }}" class="btn btn-primary btn-block btn-margin-18px">Create new posts</a>
    </div>
    <hr>
</div>

<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <table class="table">
            <thead>
                <th>Title</th>
                <th>Slug</th>
                <th>Body</th>
                <th>Created At</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach($posts as $post)
                <tr>
                    <td>{{ substr($post->title,0,50) }}  {{ strlen($post->title)>50 ? '...': ''}} </td>
                    <td>{{ $post->slug }}</td>
                    <td>{{ substr($post->body,0,50) }}  {{ strlen($post->body)>50 ? '...': ''}} </td>
                    <td>{{ date('M j,Y' , strtotime($post->created_at)) }}</td>
                    <td>
                        <a href='{{ route('posts.show',$post->id) }}' class="btn btn-default">View</a>
                        <a href='{{ route('posts.edit',$post->id) }}' class="btn btn-default">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
        <div class="text-center">
            {{ $posts->links() }}
        </div>
    </div>
</div>

@endsection