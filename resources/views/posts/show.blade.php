@extends('partials.layout')
@section('title', $post->title)
@section('content')
    <a href="{{url()-> previous()}}" class="btn btn-primary">Back</a>
    <table class="table table-zebra">
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
                <th>Created</th>
                <td>{{$post->created_at}}</td>    
            </tr>
            <tr class="hover">
                <th>Udated</th>
                <td>{{$post->uptaded_at}}</td>    
            </tr>            
        </tbody>    
    </table>    
@endsection