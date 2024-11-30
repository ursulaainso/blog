@extends('partials.layout')
@section('title', $post->title)
@section('content')
<<<<<<< HEAD
    <div class="shadow-xl card bg-base-100">
        @if($post->displayImage)
            <figure>
                <img src="{{ $post->displayImage }}"/>
            </figure>
=======
    <div class="card bg-base-100 shadow-xl">
        <figure>
        @if($post->displayImage)
            <img src="{{$post->displayImage}}" alt="Shoes" />
        </figure>
>>>>>>> ea809b6314b21d9c97c0820f7c7b1229fe1860a7
        @endif
        <div class="card-body">
            <h2 class="card-title">{{ $post->title }}</h2>
            <p>{!! $post->displayBody !!}</p>
            <div class="justify-end card-actions">

            </div>
        </div>
    </div>
@endsection
