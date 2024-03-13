@extends('layouts.layouts')

@section('contents')
    <div class="h-screen w-full bg-gray-100 flex justify-center">
        <div class="py-6 px-8 max-h-[700px] min-w-[550px] mt-10 bg-white rounded shadow-xl">
            <form action="{{route('create-post')}}" method="POST">
                @csrf
                <div class="flex items-center justify-center w-full mb-4">
                    <span class="uppercase text-2xl">Create Entry</span>
                </div>
                <div class="mb-2 w-full">
                    <div>
                         <label for="info" class="block text-gray-800 font-bold">Info:</label>
                         @if ($errors->has('info'))
                             <span class="text-red-400 text-sm">{{$errors->first('info')}}</span>
                         @endif
                    </div>
                     <input 
                         type="text" 
                         name="info" 
                         id="info" 
                         placeholder="Info" 
                         value="{{old('info')}}"
                         class="w-full border border-gray-300 py-2 pl-3 rounded mt-2 outline-none focus:ring-indigo-600 :ring-indigo-600 @error('info') text-red-400 @enderror" />
                 </div>

                 <div class="mb-2 w-full">
                    <div>
                         <label for="serial_no" class="block text-gray-800 font-bold">Serial No:</label>
                         @if ($errors->has('serial_no'))
                             <span class="text-red-400 text-sm">{{$errors->first('serial_no')}}</span>
                         @endif
                    </div>
                     <input 
                         type="text" 
                         name="serial_no" 
                         id="serial_no" 
                         placeholder="Serial No." 
                         value="{{old('serial_no')}}"
                         class="w-full border border-gray-300 py-2 pl-3 rounded mt-2 outline-none focus:ring-indigo-600 :ring-indigo-600 @error('serial_no') text-red-400 @enderror" />
                 </div>

                 <div class="mb-2 w-full">
                    <div>
                         <label for="part_no" class="block text-gray-800 font-bold">Part No:</label>
                         @if ($errors->has('info'))
                             <span class="text-red-400 text-sm">{{$errors->first('info')}}</span>
                         @endif
                    </div>
                     <input 
                         type="text" 
                         name="part_no" 
                         id="part_no" 
                         placeholder="Part No" 
                         value="{{old('part_no')}}"
                         class="w-full border border-gray-300 py-2 pl-3 rounded mt-2 outline-none focus:ring-indigo-600 :ring-indigo-600 @error('part_no') text-red-400 @enderror" />
                 </div>

                 <div class="mb-2 w-full">
                    <div>
                         <label for="entry_price" class="block text-gray-800 font-bold">Entry Price:</label>
                         @if ($errors->has('entry_price'))
                             <span class="text-red-400 text-sm">{{$errors->first('entry_price')}}</span>
                         @endif
                    </div>
                     <input 
                         type="text" 
                         name="entry_price" 
                         id="entry_price" 
                         placeholder="Entry Price" 
                         value="{{old('entry_price')}}"
                         class="w-full border border-gray-300 py-2 pl-3 rounded mt-2 outline-none focus:ring-indigo-600 :ring-indigo-600 @error('entry_price') text-red-400 @enderror" />
                 </div>

                 <div class="mb-2 w-full">
                    <div>
                         <label for="price" class="block text-gray-800 font-bold">Price:</label>
                         @if ($errors->has('price'))
                             <span class="text-red-400 text-sm">{{$errors->first('price')}}</span>
                         @endif
                    </div>
                     <input 
                         type="text" 
                         name="price" 
                         id="price" 
                         placeholder="Price" 
                         value="{{old('price')}}"
                         class="w-full border border-gray-300 py-2 pl-3 rounded mt-2 outline-none focus:ring-indigo-600 :ring-indigo-600 @error('price') text-red-400 @enderror" />
                 </div>

                <button class="cursor-pointer py-2 px-4 block bg-indigo-500 text-white font-bold w-full text-center rounded">Create Item</button>
            </form>
        </div>
    </div>
@endsection