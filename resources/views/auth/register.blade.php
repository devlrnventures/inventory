@extends('layouts.layouts')

@section('contents')
    <div class="h-screen w-screen bg-gray-100 flex justify-center">
        <div class="py-6 px-8 max-h-[620px] w-[50%] mt-20 bg-white rounded shadow-xl">
            <form action={{route('store')}} method="post">
                @csrf
                <div class="flex items-center justify-center w-full mb-4">
                    <span class="uppercase text-2xl">Register</span>
                </div>

                <div class="flex flex-row items-center justify-center gap-[20px] w-full">
                    <div class="mb-6 w-full">
                       <div>
                            <label for="name" class="block text-gray-800 font-bold">Name:</label>
                            @if ($errors->has('name'))
                                <span class="text-red-400 text-sm">{{$errors->first('name')}}</span>
                            @endif
                       </div>
                        <input 
                            type="text" 
                            name="name" 
                            id="name" 
                            placeholder="username" 
                            value="{{old('name')}}"
                            class="w-full border border-gray-300 py-2 pl-3 rounded mt-2 outline-none focus:ring-indigo-600 :ring-indigo-600 @error('name') text-red-400 @enderror" />
                    </div>
    
                    <div class="mb-6 w-full">
                        <div>
                            <label for="position" class="block text-gray-800 font-bold">Position:</label>
                            @if ($errors->has('position'))
                                <span class="text-red-400 text-sm">{{$errors->first('position')}}</span>
                            @endif
                        </div>
                        <input 
                            type="text" 
                            name="position" 
                            id="position" 
                            placeholder="position" 
                            value="{{old('position')}}"
                            class="w-full border border-gray-300 py-2 pl-3 rounded mt-2 outline-none focus:ring-indigo-600 :ring-indigo-600 @error('position') text-red-400 @enderror" />
                    </div>
                </div>

                <div class="flex flex-row items-center justify-center gap-4 w-full">
                    <div class="mb-6 w-full">
                        <div>
                            <label for="department" class="block text-gray-800 font-bold">Department:</label>
                            @if ($errors->has('department'))
                                <span class="text-red-400 text-sm">{{$errors->first('department')}}</span>
                            @endif
                        </div>
                        <input 
                            type="text" 
                            name="department" 
                            id="department" 
                            placeholder="department" 
                            value="{{old('department')}}"
                            class="w-full border border-gray-300 py-2 pl-3 rounded mt-2 outline-none focus:ring-indigo-600 :ring-indigo-600 @error('department') text-red-400 @enderror" />
                    </div>
    
                    <div class="mb-6 w-full">
                        <div>
                            <label for="company" class="block text-gray-800 font-bold">Company:</label>
                            @if ($errors->has('company'))
                                <span class="text-red-400 text-sm">{{$errors->first('company')}}</span>
                            @endif
                        </div>
                        <input 
                            type="text" 
                            name="company" 
                            id="company" 
                            placeholder="company" 
                            value="{{old('company')}}"
                            class="w-full border border-gray-300 py-2 pl-3 rounded mt-2 outline-none focus:ring-indigo-600 :ring-indigo-600 @error('company') text-red-400 @enderror" />
                    </div>
                </div>

                <div class="flex flex-row items-center justify-center gap-4 w-full">
                    <div class="mb-6 w-full">
                        <div>
                            <label for="email" class="block text-gray-800 font-bold">Email:</label>
                            @if ($errors->has('email'))
                                <span class="text-red-400 text-sm">{{$errors->first('email')}}</span>
                            @endif
                        </div>
                        <input 
                            type="text" 
                            name="email" 
                            id="email" 
                            placeholder="email" 
                            value="{{old('email')}}"
                            class="w-full border border-gray-300 py-2 pl-3 rounded mt-2 outline-none focus:ring-indigo-600 :ring-indigo-600 @error('email') text-red-400 @enderror" />
                    </div>
    
                    <div class="mb-6 w-full">
                        <div>
                            <label for="username" class="block text-gray-800 font-bold">Username:</label>
                            @if ($errors->has('username'))
                                <span class="text-red-400 text-sm">{{$errors->first('username')}}</span>
                            @endif
                        </div>
                        <input 
                            type="text" 
                            name="username" 
                            id="username" 
                            placeholder="username" 
                            value="{{old('username')}}"
                            class="w-full border border-gray-300 py-2 pl-3 rounded mt-2 outline-none focus:ring-indigo-600 :ring-indigo-600 @error('username') text-red-400 @enderror" />
                    </div>
                </div>

                <div class="flex flex-row items-center justify-center gap-4 w-full">
                    <div class="mb-6 w-full">
                        <div>
                            <label for="password" class="block text-gray-800 font-bold">Password:</label>
                            @if ($errors->has('password'))
                                <span class="text-red-400 text-sm">{{$errors->first('password')}}</span>
                            @endif
                        </div>
                        <input 
                            type="password" 
                            name="password" 
                            id="password" 
                            placeholder="password" 
                            class="w-full border border-gray-300 py-2 pl-3 rounded mt-2 outline-none focus:ring-indigo-600 :ring-indigo-600 @error('password') text-red-400 @enderror" />
                    </div>
    
                    <div class="mb-6 w-full">
                        <div>
                            <label for="password_confirmation" class="block text-gray-800 font-bold">Password Confirmation:</label>
                            @if ($errors->has('password'))
                                <span class="text-red-400 text-sm">{{$errors->first('password')}}</span>
                            @endif
                        </div>
                        <input 
                            type="password" 
                            name="password_confirmation" 
                            id="password_confirmation" 
                            placeholder="password confirmation" 
                            class="w-full border border-gray-300 py-2 pl-3 rounded mt-2 outline-none focus:ring-indigo-600 :ring-indigo-600 @error('password_confirmation') text-red-400 @enderror" />
                    </div>
                </div>
                
                <button class="cursor-pointer py-2 px-4 block bg-indigo-500 text-white font-bold w-full text-center rounded">Register</button>
            </form>
        </div>
    </div>
@endsection