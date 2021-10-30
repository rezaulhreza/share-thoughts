@extends('layouts.app')


@section('content')

<div class="w-full flex justify-center flex-wrap">

  <!-- Register Section -->
  <div class="w-full md:w-1/2 flex flex-col">

      {{-- <div class="flex justify-center md:justify-start pt-12 md:pl-12 md:-mb-12">
          <a href="{{ route('home') }}" class="bg-black text-white font-bold text-xl p-4" alt="Logo">ShareNow</a>
      </div> --}}

      <div class="flex flex-col justify-center md:justify-start my-auto pt-8 md:pt-0 px-8 md:px-24 lg:px-32">
          <p class="text-center text-3xl">Login.</p>


          @if(session('status'))
<div class="bg-red-500 p-5 rounded-lg mb-6  text-white text-center">
{{ session('status') }}

</div>



@endif

<form action="{{route('login')}}" method="post"  class="flex flex-col pt-3 md:pt-8">

@csrf



<div class="relative border-b-2 focus-within:border-blue-500 rounded-lg  mb-4">
<label for="email" class="text-lg">Email</label>
<input type="text" name="email"  id="email" placeholder="Enter your email " class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline @error('email') border-red-500 @enderror" value= "{{ old('email') }}"/>


@error('email')
<div class="text-red-500 mt-2 text-sm">

{{ $message }}
</div>
@enderror

</div>

<div class="relative border-b-2 focus-within:border-blue-500 rounded-lg  mb-4">
<label for="password" class="text-lg">Password</label>
<input type="password" name="password"  id="password" placeholder="Enter Password " class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline @error('password') border-red-500 @enderror" />


@error('password')
<div class="text-red-500 mt-2 text-sm">

{{ $message }}
</div>
@enderror

</div>




<div class="mb-4">
<div class="flex items-center">
      <input type="checkbox" name="remember" id="remember" class="mr-2">
      <label for="remember">Remember Me</label>
    </div>


</div>

<div> <button type="submit" class="bg-black text-white px-4 py-3 rounded-font-medium w-full rounded-lg">Login</button>

</div>
<div class="text-center pt-12 pb-12">
<p>Not a member?<a href="{{ route('register') }}" class="underline font-semibold">Sign up here.</a></p>
</div>


</form>

</div>

@endsection