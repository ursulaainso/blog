@extends('partials.layout')
@section('title', $post->title)
@section('content')
    <a href="{{ url()->previous() }}" class="my-2 btn btn-primary ml-48 mt-4 mb-8">Back</a>
    <table class="table table-zebra w-3/4 justify-self-center">
        <tbody>
            <tr class="hover">
                <th>ID</th>
                <td>{{$post->id}}</td>
            </tr>
            <tr class="hover">
                <th>Title</th>
                <td>{{$post->title}}</td>
            </tr>
            <tr class="hover">
                <th>Content</th>
                <td>{{$post->body}}</td>
            </tr>
            <tr class="hover">
                <th>User</th>
                <td>{{$post->user->name}}</td>
            </tr>
            <tr class="hover">
                <th>Created</th>
                <td>{{$post->created_at}}</td>
            </tr>
            <tr class="hover">
                <th>Updated</th>
                <td>{{$post->updated_at}}</td>
            </tr>
        </tbody>
    </table>
@endsection
