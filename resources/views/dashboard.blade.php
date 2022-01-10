@extends('layouts.app')


@section('content')

<div class="flex flex-col justify-center">
    <div class="bg-white p-5 rounded-lg mb-6">
Dashboard

</div>
<div class="h-auto bg-white p-8 rounded-lg pb-8 mb-6">
     
    <img class="w-12 h-12 mr-2 rounded-full  " src="/uploads/users/{{ Auth::user()->profile_image
    }}" alt=""><span><button class="text-blue-400">Edit</button></span> <span><button class="text-red-400">Delete</button>
    <p> <strong>Name: </strong>{{ auth()->user()->name }} <span><button class="text-blue-400">Edit</button></span> <span><button class="text-red-400">Delete</button></p>
    <p> <strong>Username: </strong>{{ auth()->user()->username }} <span><button class="text-blue-400">Edit</button></span> <span><button class="text-red-400">Delete</button></p>
    <p> <strong>Email: </strong>{{ auth()->user()->email }} <span><button class="text-blue-400">Edit</button></span> <span><button class="text-red-400">Delete</button></p>
 
    
    </div>


</div>



@endsection