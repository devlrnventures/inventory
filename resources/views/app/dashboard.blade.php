@extends('layouts.layouts')

@section('contents')
    <div class="flex justify-content-center w-full mx-4 my-4">
        <div class="text-base">Welcome to Dashboard:</div>
            @if ($message = Session::get('success'))
                <div class="mx-4 text-base text-red-900 font-bold">
                    {{ $message }}
                </div>
            @else
                <div class="mx-4 text-base text-blue-900 font-bold">
                    {{ $message }}
                </div>       
            @endif                
        </div>

        <div class="flex items-center justify-center w-full">
            <form action="{{route('search')}}" method="POST">
                @csrf
                <input 
                    type="text" 
                    name="search" 
                    id="search" 
                    placeholder="Search something..."
                    class="min-w-[500px] p-2 rounded-xl border border-solid border-blue-700 focus:outline-none focus:border-red-700" 
                />
                <button
                    type="submit"
                    class="text-white rounded-lg bg-blue-700 p-2 hover:bg-red-700"
                >
                    Search
                </button>
            </form>
        </div>

        <div class="flex items-center justify-center w-full my-[50px]">
            <div class="flex flex-col min-w-[800px]">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                            <table class="min-w-full text-left text-sm font-light text-surface">
                                <thead class="border border-neutral-200 font-medium">
                                    <tr>
                                        <th scope="col" class="px-6 py-4">Info</th>
                                        <th scope="col" class="px-6 py-4">Serial No</th>
                                        <th scope="col" class="px-6 py-4">Part No</th>
                                        <th scope="col" class="px-6 py-4">Entry Price</th>
                                        <th scope="col" class="px-6 py-4">Price</th>
                                    </tr>
                                </thead>
                                @foreach ($data as $item)
                                <tbody>
                                    <tr class="border border-neutral-200">
                                        <td class="whitespace-nowrap px-6 py-4">{{ $item->info }}</td>
                                        <td class="whitespace-nowrap px-6 py-4">{{ $item->serial_no }}</td>
                                        <td class="whitespace-nowrap px-6 py-4">{{ $item->part_no }}</td>
                                        <td class="whitespace-nowrap px-6 py-4">{{ $item->entry_price }}</td>
                                        <td class="whitespace-nowrap px-6 py-4">{{ $item->price }}</td>
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>
                            <div class="flex items-end justify-end my-4">
                                {{ $data->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
        </div>
    </div>
@endsection