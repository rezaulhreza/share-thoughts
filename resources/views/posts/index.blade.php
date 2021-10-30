@extends('layouts.app')


@section('content')

<div class="flex justify-center">
        <div class="w-8/12 bg-white p-5 rounded-lg mb-6">
    <h1>Posts</h1>
    
    </div>
    </div>

    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-5 rounded-lg mb-6">


           
                    <form action="{{ route('posts') }}" method="post" class="mb-4" enctype="multipart/form-data">

                    @csrf


                    <div class="mb-4">

                        <label for="body" class="sr-only">Body</label>

                        <textarea name="body" id="body" cols="30" rows="4" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('body') border-red-500 @enderror" placeholder="Post something!"></textarea>

                        
                        
                        @error('body')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror


                    </div>
                    <div class="mb-4">
                        <label for="image" class="sr-only">Image</label>
                       <input type="file" name="image" class="form-control" placeholder="Post Image">
                    </div>

                    <div>
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded font-medium">Post</button>
                    </div>
                </form>


                <!-- if there is any posts it will return true -->

                @if($posts->count())

                <!-- for each posts it will display name, date and the body of the posts -->

                @foreach($posts as $post)


                <x-post :post="$post" />

                
                @endforeach


                <!-- laravel and tailwind css pagination -->

                {{ $posts->links() }}


        <!-- if there is no posts then it will display the below message -->
                @else

                No posts yet

                @endif




            
       
        </div>
    </div>
      
</div>
   



@endsection