<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>LRN Ventures - INV</title>
    
</head>
<body>
    <header>
        <nav>
          <div class="">
            <div class="flex justify-between h-16 px-10 shadow items-center">
              <div class="flex items-center space-x-8">
                <a href="{{route('home')}}" class="text-xl lg:text-2xl font-bold cursor-pointer">LRN Inv</a>
                
                @if(Auth::check())
                    <div class="hidden md:flex justify-around space-x-4">
                        <a href="{{route('dashboard')}}" class="hover:text-red-700 text-blue-700">Dashboard</a>
                        <a href="{{route('create')}}" class="hover:text-red-700 text-blue-700">Create</a>
                    </div>
                @endif
              </div>
              @guest
                <div class="flex space-x-4 items-center">
                    <a href="{{route('login')}}" class="text-gray-800 text-sm uppercase">Login</a>
                    <a href="{{route('register')}}" class="bg-indigo-600 px-4 py-2 rounded text-white hover:bg-indigo-500 text-sm uppercase">Register</a>
                </div>
              @else
                <div class="flex space-x-4 items-center">
                    
                    <p>Welcome <span class="text-blue-600">{{Auth::user()->name}}</span>!</p>
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <button 
                          type="submit" 
                          class="text-white text-sm uppercase rounded p-2 bg-blue-700 hover:bg-red-700">
                          Logout
                      </button>
                    </form>
                </div>
              @endguest
            </div>
          </div>
        </nav>
      </header>

    <div class="container">
        @yield('contents')
    </div> 

</body>
</html>