@extends('layouts.layouts')

@section('contents')
    <div class="h-screen bg-gray-100 flex justify-center">
        <div class="py-6 px-8 max-h-[390px] mt-20 bg-white rounded shadow-xl">
            @if ($message = Session::get('errors'))
                <div class="mx-4 text-base text-red-900 font-bold">
                    {{ $message->first('username') }}
                </div>      
            @endif          
            <form action="{{route('authenticate')}}" method="POST">
                @csrf
                <div class="flex items-center justify-center w-full">
                    <span class="uppercase text-2xl">Login</span>
                </div>
                <div class="mb-6">
                    <label for="username" class="block text-gray-800 font-bold">Username:</label>
                    <input 
                        type="text" 
                        name="username" 
                        id="username" 
                        placeholder="username" 
                        class="w-full border border-gray-300 py-2 pl-3 rounded mt-2 outline-none focus:ring-indigo-600 :ring-indigo-600" />
                </div>

                <div>
                    <label for="password" class="block text-gray-800 font-bold">Password:</label>
                    <input 
                        type="password" 
                        name="password" 
                        id="password" 
                        placeholder="password" 
                        class="w-full border border-gray-300 py-2 pl-3 rounded mt-2 outline-none focus:ring-indigo-600 :ring-indigo-600" />

                    <a href="#" class="text-sm font-thin text-gray-800 hover:underline mt-2 inline-block hover:text-indigo-600">Forget Password</a>
                </div>
                <button type="submit" class="cursor-pointer py-2 px-4 block mt-6 bg-indigo-500 text-white font-bold w-full text-center rounded">Login</button>
            </form>
        </div>
    </div>
@endsection