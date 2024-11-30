@extends('partials.layout')
@section('title', 'New Post')
@section('content')
    <div class="w-2/3 mx-auto card bg-base-300">
        <div class="card-body">
            <h2 class="card-title">New Post</h2>
<<<<<<< HEAD
            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
=======
            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data"> 
>>>>>>> ea809b6314b21d9c97c0820f7c7b1229fe1860a7
                @csrf
                <label class="w-full form-control">
                    <div class="label">
                        <span class="label-text">Title</span>
                    </div>
                    <input name="title" type="text" placeholder="Title" value="{{ old('title') }}" class="w-full input input-bordered @error('title') input-error @enderror" />
                    <div class="label">
                        @error('title')
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        @enderror
                    </div>
                </label>
                <label class="form-control">
                    <div class="label">
                        <span class="label-text">Content</span>
                    </div>
                    <textarea name="body" rows="12" class="textarea textarea-bordered @error('body') textarea-error @enderror" placeholder="Write something cool...">{{ old('body') }}</textarea>
                    <div class="label">
                        @error('body')
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        @enderror
                    </div>
                </label>
<<<<<<< HEAD
                <label class="w-full form-control">
                    <div class="label">
                        <span class="label-text">Image</span>
                    </div>
                    <input name="image" type="file" accept="image/*" class="w-full file-input file-input-bordered @error('image') file-input-error @enderror" />
                    <div class="label">
                        @error('image')
=======
                <label class="form-control">
                    <div class="label">
                        <span class="label-text">Image</span>
                    </div>
                    <input name="image" type="file" placeholder="Image" accept="image/*" class="w-full input file-input input-bordered @error('title') input-error @enderror" />
                    <div class="label">
                        @error('title')
>>>>>>> ea809b6314b21d9c97c0820f7c7b1229fe1860a7
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        @enderror
                    </div>
                </label>
                <input type="submit" class="btn btn-primary" value="Create">
            </form>
        </div>
    </div>
@endsection
