@extends('layouts.app')

@section('content')

    <h1 class="text-center font-bold text-2xl mb-5 py-3 text-white bg-[#a43636]">Create User</h1>
    <div class="flex justify-center mb-5">
        <a class="text-center text-red-700 font-bold border-2 border-[#943a19] py-2 px-5 rounded-lg hover:scale-105 transition-all" href="{{ url('games') }}">Game Module</a>
    </div>
    
    <section class="mb-10 w-[600px] mx-auto border-4 border-orange-900 rounded-2xl p-0 overflow-hidden bg-[#943a19]">
            
        <header class="w-12/12 m-0 font-semibold bg-orange-900 text-white py-5 px-6 text-center">
            {{ __('Add Game') }}
        </header>

        <form class="p-8 pb-5" method="POST" action="{{ url('games') }}">
            @csrf
            
            <!-- Name -->
            <div>
                <label class="text-white" for="name">{{ __('Name') }}</label>
                <input id="name" class="block mt-1 w-full rounded-md border-gray-400" type="text" name="name" value="{{old('name')}}" required autofocus />
            </div>

            <!-- Imagen -->
            <div class="mt-4">
                <label class="text-white" for="imagen">{{ __('Imagen') }}</label>
                <input id="imagen" class="block mt-1 w-full rounded-md border-gray-400" type="text" name="imagen" value="{{old('imagen')}}" required />
            </div>

            <!-- Description -->
            <div class="mt-4">
                <label class="text-white" for="description">{{ __('Description') }}</label>
                <input id="description" class="block mt-1 w-full rounded-md border-gray-400" type="text" name="description" value="{{old('description')}}" required />
            </div>

            <!-- User ID -->
            <div class="mt-4">
                <label class="text-white" for="user_id">{{ __('User ID') }}</label>
                <input id="user_id" class="block mt-1 w-full rounded-md border-gray-400" type="number" name="user_id" value="{{old('user_id')}}" required />
            </div>

            <!-- Category ID -->
            <div class="mt-4">
                <label class="text-white" for="category_id">{{ __('Category ID') }}</label>
                <input id="category_id" class="block mt-1 w-full rounded-md border-gray-400" type="number" name="category_id" value="{{old('category_id')}}" required />
            </div>

            <!-- Slider -->
            <div class="mt-4">
                <label class="text-white" for="slider">{{ __('Slider') }}</label>
                <select name="slider" id="slider" class="block mt-1 w-full rounded-md border-gray-400 cursor-pointer">
                    <option value="" @if(!old('slider')) selected @endif disabled>---</option>
                    <option value="1" @if(old('slider') == '1') selected @endif>1</option>
                    <option value="0" @if(old('slider') == '0') selected @endif>0</option>
                </select>
            </div>
            
            <!-- Price -->
            <div class="mt-4">
                <label class="text-white" for="price">{{ __('Price') }}</label>
                <input id="price" class="block mt-1 w-full rounded-md border-gray-400" type="number" name="price" value="{{old('price')}}" required />
            </div>

            
            <!-- Button Add -->  
            <div class="flex justify-center mt-5">
                <button class="bg-orange-900 text-white text-center py-4 px-10 rounded-lg hover:bg-[#c54b22] transition-all">{{ __('Add') }}</button>
            </div>          
        </form>
    
    </section>
    <div class="text-center font-bold text-2xl mb-5 py-7 text-white bg-red-900"></div>
    
@endsection