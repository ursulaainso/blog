@extends('partials.layout')
@section('title', 'Home')
@section('content')

    <div class="card bg-base-300">
        <div class="card-body">
            <h1 class="card-title">{{$user->name}}</h1>
            <table>
                <tbody class="text-left">
                    <tr class="hover">
                        <th>Comments count</th>
                        <td>{{$user->comments()->count()}}</td>
                    </tr>
                    <tr class="hover">
                        <th>Likes count</th>
                        <td>{{$user->likes()->count()}}</td>
                    </tr>
                    <tr class="hover">
                        <th>Posts count</th>
                        <td>{{$user->posts()->count()}}</td>
                    </tr>
                    <tr class="hover">
                        <th>Comments on user posts count</th>
                        <td>{{$user->comments()->count()}}</td>
                    </tr>
                    <tr class="hover">
                        <th>Likes on user posts count</th>
                        <td>{{$user->comments()->count()}}</td>
                    </tr>
                    <tr class="hover">
                        <th>Followers count</th>
                        <td>{{$user->follower()->count()}}</td>
                    </tr>
                    <tr class="hover">
                        <th>Followees count</th>
                        <td>{{$user->followee()->count()}}</td>
                    </tr>
                </tbody>

            </table>

            <form action="{{route('follow')}}" method="POST">
                @csrf
                <button class="btn btn-error">Unfollow</button>
                <button class="btn btn-primary">Follow</button>
            </form>
        </div>
    </div>
    <div class="my-4 text-center">
        {{ $posts->links() }}
    </div>
    <div class="grid grid-cols-4 gap-2">
        @foreach ($posts as $post)
            @include('partials.post-card')
        @endforeach
    </div>
@endsection
