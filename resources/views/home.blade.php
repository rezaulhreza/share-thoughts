@extends('layouts.app')


@section('content')
{{-- <div class=""><br></div><br><br> --}}

{{-- @if(!session('status'))
<div class="bg-red-500 p-5 rounded-lg mb-6  text-white text-center">
{{ session('status') }}

</div>



@endif --}}
<div class="pt-auto">
<div class="flex text-center  flex-col justify-center">
  <img src="https://pixabay.com/illustrations/social-media-social-marketing-5187243/" alt="">
  <div class="p-6">

    <h1 class="text-2xl font-medium mb-1">Welcome to ShareNow</h1>
 

  </div>
  @guest  
    <div class="p-8 rounded-lg pb-8 mb-8">
      <div class="p-4 mb-4 rounded-lg text-xl">
     
        <div id="moka-w1wgf" class="items-center justify-center w-full p-8 flex flex-col">
          <div id="moka-ix3cs" class="bg-blue-500 items-center justify-center md:w-1/2 w-full shadow-md p-5 h-auto mb-2 rounded-lg blur-3 bg-opacity-50 flex flex-col col-span-12">
            <h1><strong>Emerging Social Media Site</strong></h1>
           
             
            <h2>Sharing made easier!</h2>
            
          </div>
        </div>
      
      </div>
<a href="{{route('login')}}">


    <button class="bg-transparent hover:bg-blue-500 text-gray-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
        Log In
      </button>

    </a> <br><br>
    <a href="{{route('register')}}">


        <button class="bg-transparent hover:bg-blue-500 text-gray-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
            Register
          </button>
    
        </a>
    </div>
    <div class="p-4 mb-4 rounded-lg text-xl">
     
        <div id="moka-w1wgf" class="items-center justify-center w-full p-8 flex flex-col">
          <div id="moka-ix3cs" class="bg-blue-500 items-center justify-center md:w-1/2 w-full shadow-md p-5 h-auto rounded-lg blur-3 bg-opacity-50 flex flex-col col-span-12">
            <h4 class="w-48 border-t-4 border-solid border-blue-200 h-20" id="moka-uuij0">
            <h2>Connecting People-<span>Changing the internet</span></h2>
          </div>
        </div>
      
      </div>
    </div>
    @endguest

    @auth
    <a href="{{route('posts')}}">
      <div class="p-4 mb-4 rounded-lg text-xl">
     
        <div id="moka-w1wgf" class="items-center justify-center w-full p-8 flex flex-col">
          <div id="moka-ix3cs" class="bg-blue-500 items-center justify-center md:w-1/2 w-full shadow-md p-5 h-auto rounded-lg blur-3 bg-opacity-50 flex flex-col col-span-12">
            <h4 class="w-48 border-t-4 border-solid border-blue-200 h-20" id="moka-uuij0">
            <h2>Connecting People-<span>Changing the internet</span></h2>
          </div>
        </div>
      
      </div>
      <div>

     
    <button class="bg-transparent hover:bg-blue-500 text-gray-700 pt-5 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
     Share your thoughts
    </button>
  </div>
    </a>
   
    @endauth

</div>
</div>

@endsection