<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShareNow</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="shortcut icon" href="favi.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-gray-100">
  <div class="p-6 flex bg-gray-100 justify-between mb-6">
    <div  class="bg-black text-white font-bold text-xl p-4">
Share Now
    </div>
    <p></p>
  </div>
  {{-- <div class="min-h-screen bg-blue-500 p-20 text-blue-800">
    <p class="text-9xl mt-64">Fixed Bottom Nav!</p>
  </div> --}}
  
  <!-- fixed nav -->
  {{-- <div class="bg-white p-5 text-center rounded-lg mb-6">
    ShareNow
    
    </div> --}}
    <div>

   
      
  <nav class="fixed bottom-0 inset-x-0 bg-indigo-100 rounded-lg flex justify-between text-sm text-blue-900 uppercase font-mono">
  
    <a href="{{ route('home') }}" class="w-full block py-5 px-3 text-center hover:bg-blue-200 hover:text-blue-800 transition duration-300">
        <i class="fas fa-house-user fa-2x"></i><br>
     Home
    </a>

  @auth
    <a href="{{ route('dashboard') }}" class="w-full block py-5 px-3 text-center hover:bg-blue-200 hover:text-blue-800">
        <i class="fas fa-chart-line fa-2x"></i> <br>
      Dashboard
    </a>
    @endauth
  
    <a href="{{ route('posts') }}" class="w-full block py-5 px-3 text-center hover:bg-blue-200 hover:text-blue-800">
        <i class="fas fa-pen-square fa-2x"></i> <br>
      Posts
    </a>

    @auth
    <a href="#" class="w-full inline block py-5 px-3 text-center hover:bg-blue-200 hover:text-blue-800">
  
        <img class="inline object-cover w-12 h-12 mr-2 rounded-full " src="/uploads/users/{{ Auth::user()->profile_image
        }}" alt="">
        <span> <strong>{{ auth()->user()->name }}</strong></span>
     
      
    </a>
     
  
      <form action="{{ route('logout') }}" method="post" class="w-full block py-5 px-3 text-center hover:bg-blue-200 hover:text-blue-800">
    
                        @csrf
    
    
                                <button type="submit"><i class="fas fa-sign-out-alt fa-2x"></i></button>
                                <br>Logout
                                
    
                    </form>
                    
                    
    </a>
    @endauth
 
    @guest

     <a href="{{ route('login') }}" class="w-full block py-5 px-3 text-center hover:bg-blue-200 hover:text-blue-800">
        <i class="fas fa-sign-out-alt fa-2x"></i> <br>
      Login
    </a>
    <a href="{{ route('register') }}" class="w-full block py-5 px-3 text-center hover:bg-blue-200 hover:text-blue-800">
        <i class="fas fa-user-plus fa-2x"></i><br>
      Register
    </a>
    @endguest
  
  </nav>
</div>
  <div class="pb-10 mb-10">
    @yield('content')

  </div>
    



    
</body>
</html>