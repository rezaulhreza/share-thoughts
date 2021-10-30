  @extends('layouts.app')


  @section('content')

            <div class="w-full   flex justify-center flex-wrap pb-12 mb-10">

              <!-- Register Section -->
              <div class="w-full md:w-1/2 flex flex-col">
                  <div class="flex flex-col justify-center md:justify-start my-auto pt-8 md:pt-0 px-8 md:px-24 lg:px-32">
                      <p class="text-center text-3xl">Join Us.</p>



<div>
              <form action="{{route('register')}}" method="post"  class="flex flex-col pt-3 md:pt-8" enctype="multipart/form-data">

              @csrf

              <div class=" border-b-2  focus-within:border-blue-500 rounded-lg  mb-4">
                <label for="profile_image" class="text-lg">Profile Picture</label>
                          <input type="file" name="profile_image"   id="profile_image" class="bg-white shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline @error('profile_image') border-red-500 @enderror" value= "{{ old('profile_image') }}"/>
                
                  @error('profile_image')
              <div class="text-red-500 mt-2 text-sm">

  {{ $message }}
      </div>
      @enderror

        </div>


              <div class=" border-b-2 focus-within:border-blue-500 rounded-lg  mb-4">
                <label for="name" class="text-lg">Name</label>
                          <input type="text" name="name"  id="name" placeholder="Enter Full Name " class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline @error('name') border-red-500 @enderror" value= "{{ old('name') }}"/>
                
                  @error('name')
              <div class="text-red-500 mt-2 text-sm">

  {{ $message }}
      </div>
      @enderror

        </div>


      <div class=" border-b-2 focus-within:border-blue-500 rounded-lg  mb-4">
        <label for="username" class="text-lg">Username</label>
          <input type="text" id="username"  name="username" placeholder="Enter your user name " class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline @error('username') border-red-500 @enderror" value= "{{ old('username') }}" />
        
          @error('username')
      <div class="text-red-500 mt-2 text-sm">

  {{ $message }}
      </div>
      @enderror
        </div>

        <div class=" border-b-2 focus-within:border-blue-500 rounded-lg  mb-4">
          <label for="email" class="text-lg">Email</label>
          <input type="text" name="email"  id="email" placeholder="Enter your email " class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline @error('email') border-red-500 @enderror" value= "{{ old('email') }}"/>
        

          @error('email')
      <div class="text-red-500 mt-2 text-sm">

  {{ $message }}
      </div>
      @enderror

        </div>

        <div class=" border-b-2 focus-within:border-blue-500 rounded-lg  mb-4">
          <label for="password" class="text-lg">Password</label>
          <input type="password" name="password"  id="password" placeholder="Enter Password " class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline @error('password') border-red-500 @enderror" />
        

          @error('password')
      <div class="text-red-500 mt-2 text-sm">

  {{ $message }}
      </div>
      @enderror

        </div>
        <div class=" border-b-2 focus-within:border-blue-500 rounded-lg  mb-4">
          <label for="username" class="text-lg">Repeat Password</label>
          <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat Your Password " class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline @error('name') border-red-500 @enderror" />
        

          @error('password_confirmation')
      <div class="text-red-500 mt-2 text-sm">

  {{ $message }}
      </div>
      @enderror

        </div>

        <div class="mb-4">

          
          </div>

        <div> <button type="submit" class="bg-black text-white px-4 py-3 rounded-font-medium w-full rounded-lg">Register</button>
        
        </div>
      


      </form>
    </div>
  </div>
              </div>
            </div>
            
              

    


  @endsection