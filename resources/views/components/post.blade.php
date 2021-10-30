    @props(['post' => $post])

<div class=" rounded shadow-sm-overflow-hidden">


    <div class="m-3 rounded pb-10">
        <div class="max-w-sm rounded overflow-hidden shadow-lg border-2 ">
            {{-- @if(is_null($post->user->profile_image)){
                <img class="inline object-cover w-12 h-12 mr-2 rounded-full" src="https://pixabay.com/vectors/blank-profile-picture-mystery-man-973460/" alt="">
            }
           @endif --}}
           
            <img class="inline object-cover w-12 h-12 mr-2 rounded-full" src="/uploads/users/{{$post->user->profile_image
            }}" alt=""><span>  <a href="{{ route('users.posts', $post->user) }}" class="font-bold">{{ $post->user->name }}</a> <span class="text-gray-600 pb-2 text-sm font-normal"> Posted {{ $post->created_at->diffForHumans() }}</span></span>
            {{-- <div class="font-bold text-xl ml-5 mb-2">
              
        <a href="{{ route('users.posts', $post->user) }}" class="font-bold">{{ $post->user->name }}</a> <span class="text-gray-600 pb-2 text-sm font-normal"> Posted {{ $post->created_at->diffForHumans() }}</span>
            </div> --}}
       
        <img class="m-3  pr-5" src="/uploads/{{ $post->image }}" width="Auto">
        <div class="px-6 py-4 border-2 m-2">

        <p class="mb-2 text-gray-700 text-base">{{ $post->body }}</p>
        </div>
        

    
        <div class="flex items-center">
            <div class="px-6 pt-4 pb-2">
            
            @auth
                @if (!$post->likedBy(auth()->user()))
                    <form action="{{ route('posts.likes', $post) }}" method="post" class="mr-1">
                        @csrf
                        <button type="submit" class="inline-block bg-blue-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Like</button>
                    </form>
                @else
                    <form action="{{ route('posts.likes', $post) }}" method="post" class="mr-1">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="inline-block bg-red-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Unlike</button>
                    </form>
                @endif
            @endauth

            @can('delete', $post)
            <form action="{{ route('posts.destroy', $post) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="inline-block bg-red-500 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2">Delete</button>
            </form>
        @endcan
            </div>

    <div class="text-sm">
        <span>{{ $post->likes->count() }} {{ Str::plural('like', $post->likes->count()) }}</span>
    </div>
            
        </div>
    </div>
</div>
</div>