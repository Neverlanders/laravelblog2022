@extends('layouts.admin')
@section('content')
    <h1>Posts</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Photo</th>
                <th>Owner</th>
                <th>Category</th>
                <th>Title</th>
                <th>Body</th>
                <th>Created</th>
                <th>Updated</th>
            </tr>
        </thead>
        <tbody>
        @if($posts)
            @foreach($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->photo_id}}</td>
                <td>{{$post->user ? $post->user->name : 'Username not known'}}</td>
                <td>{{$post->category ? $post->category->name : 'Category not known'}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->body}}</td>
                <td>{{$post->created_at->diffForHumans()}}</td>
                <td>{{$post->updated_at->diffForHumans()}}</td>
            </tr>
            @endforeach
        @else
            <tr>
                <td colspan="8" class="alert alert-warning">
                    {{session('user_message')}}
                </td>
            </tr>
        @endif
        </tbody>
    </table>
    <div class="text-center">
        {{$posts->links()}}
    </div>
    @stop
