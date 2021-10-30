
@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        
        <div class="w-8/12">
            <div class="p-6">
                <h1 class="text-2xl font-medium mb-1">Post Activity of {{ $user->name }}</h1>
                <p>Posted {{ $posts->count() }} {{ Str::plural('posts', $posts->count()) }} and received {{ $user->receivedLikes->count()}} Likes </p>
                
               
                {{-- <p>Posted {{ $posts->count() }} {{ Str::plural('post', $posts->count()) }} and received {{ $user->receivedLikes->count() }} likes</p> --}}
            </div>

            <div class="bg-white p-6 rounded-lg">
                {{-- <h1 class="text-center text-xl"> --}}


                    {{-- Total Posts: {{ $posts->count() }} --}}
                
                {{-- </h1> --}}
                @if ($posts->count())
               
                    @foreach ($posts as $post)
                        <x-post :post="$post" />
                    @endforeach

                    {{ $posts->links() }}
                @else
                    <p>{{ $user->name }} does not have any posts</p>
                @endif
            </div>
        </div>
    </div>
@endsection