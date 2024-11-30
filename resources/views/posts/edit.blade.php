@extends('partials.layout')
@section('title', 'Edit Post')
@section('content')
    <div class="w-2/3 mx-auto card bg-base-300">
        <div class="card-body">
            <h2 class="card-title">Edit Post</h2>
            <form action="{{ route('posts.update', ['post'=>$post]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <label class="w-full form-control">
                    <div class="label">
                        <span class="label-text">Title</span>
                    </div>
                    <input name="title" type="text" placeholder="Title" value="{{ old('title') ?? $post->title }}" class="w-full input input-bordered @error('title') input-error @enderror" />
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
                    <textarea name="body" rows="12" class="textarea textarea-bordered @error('body') textarea-error @enderror" placeholder="Write something cool...">{{ old('body') ?? $post->body }}</textarea>
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
                <input type="submit" class="btn btn-primary" value="Update">
            </form>
        </div>
    </div>
@endsection
