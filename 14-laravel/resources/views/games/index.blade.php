@extends('layouts.app')

@section('content')
    <h1 class="text-center font-bold text-2xl mb-5 py-3 text-white bg-[#a43636]">Module Games</h1>
    <div class="flex justify-center gap-3">
        <a href="{{ "games/create" }}" class="text-center text-red-700 font-bold border-2 border-[#943a19] py-2 px-5 rounded-lg hover:scale-105 transition-all">Add Game</a>
        <a href="{{ "dashboard" }}" class="text-center text-red-700 font-bold border-2 border-[#943a19] py-2 px-5 rounded-lg hover:scale-105 transition-all">Dashboard</a>
    </div>
    
    @if(session('message'))
        <p class="bg-green-500 w-[500px] mx-auto rounded-lg font-medium text-center mt-7 text-white py-2 px-3">
            {{ session('message') }}
        </p>
    @endif
    
    <table class="my-10 mx-auto text-gray-300 text-center rounded-2xl overflow-hidden border-orange-800">
        <thead class="text-xs text-white uppercase bg-orange-800">
            <tr class="rounded-">
                <th class="px-6 py-3">Namne</th>
                <th class="px-6 py-3">Image</th>
                <th class="px-6 py-3">Description</th>
                <th class="px-6 py-3">Price</th>
                <th class="px-6 py-3">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($games as $game)
                <tr class="border-b border-white bg-[#772817]">
                    <td class="px-6 py-2">{{ $game->name }}</td>
                    <td class="px-6 py-2">{{ $game->imagen }}</td>
                    <td class="px-6 py-2">{{ $game->description }}</td>
                    <td class="px-6 py-2">{{ $game->price }}</td>
                    <td class="flex gap-3 px-6 py-2">
                        <a class="hover:scale-125 transition-all" href="{{ url('games/'.$game->id) }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </a>
                        <a class="hover:scale-125 transition-all" href="{{ url('games/'.$game->id.'/edit') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                        </a>
                        <form class="hover:scale-125 transition-all" action="{{ url('games/'.$game->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection