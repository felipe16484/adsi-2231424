@extends('layouts.app')

@section('content')

    <h1 class="text-center font-bold text-2xl mb-5 py-3 text-white bg-[#a43636]">Create User</h1>
    <div class="flex justify-center mb-5">
        <a class="text-center text-red-700 font-bold border-2 border-[#943a19] py-2 px-5 rounded-lg hover:scale-105 transition-all" href="{{ url('users') }}">User Module</a>
    </div>
    
    <section class="mb-10 w-[600px] mx-auto border-4 border-orange-900 rounded-2xl p-0 overflow-hidden bg-[#943a19]">
            
        <header class="w-12/12 m-0 font-semibold bg-orange-900 text-white py-5 px-6 text-center">
            {{ __('Add User') }}
        </header>

        <form class="p-8 pb-5" method="POST" action="{{ url('users') }}">
            @csrf
            
            <!-- Name -->
            <div>
                <label class="text-white" for="fullname">{{ __('general.fullname') }}</label>
                <input id="fullname" class="block mt-1 w-full rounded-md border-gray-400" type="text" name="fullname" value="{{old('fullname')}}" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <label class="text-white" for="email">{{ __('general.email') }}</label>
                <input id="email" class="block mt-1 w-full rounded-md border-gray-400" type="email" name="email" value="{{old('email')}}" required />
            </div>

            <!-- Phone -->
            <div class="mt-4">
                <label class="text-white" for="phone">{{ __('general.phone') }}</label>
                <input id="phone" class="block mt-1 w-full rounded-md border-gray-400" type="number" name="phone" value="{{old('phone')}}" required />
            </div>

            <!-- Date -->
            <div class="mt-4">
                <label class="text-white" for="date">{{ __('general.birthdate') }}</label>
                <input id="date" class="block mt-1 w-full rounded-md border-gray-400 cursor-pointer" type="date" name="birthday" value="{{old('date')}}" required />
            </div>

            <!-- Gender -->
            <div class="mt-4">
                <label class="text-white" for="gender">{{ __('general.gender') }}</label>
                <select name="gender" id="gender" class="block mt-1 w-full rounded-md border-gray-400 cursor-pointer">
                    <option value="" @if(!old('gender')) selected @endif disabled>---</option>
                    <option value="Male" @if(old('gender') == 'Male') selected @endif>Male</option>
                    <option value="Female" @if(old('gender') == 'Female') selected @endif>Female</option>
                </select>
            </div>
            
            <!-- Address -->
            <div class="mt-4">
                <label class="text-white" for="address">{{ __('general.address') }}</label>
                <input id="address" class="block mt-1 w-full rounded-md border-gray-400" type="text" name="address" value="{{old('address')}}" required />
            </div>

            <!-- Role -->
            <div class="mt-4">
                <label class="text-white" for="role">{{ __('general.role') }}</label>
                <select name="role" id="role" class="block mt-1 w-full rounded-md border-gray-400 cursor-pointer">
                    <option value="" @if(!old('role')) selected @endif disabled>---</option>
                    <option value="Admin" @if(old('role') == 'Admin') selected @endif>Admin</option>
                    <option value="Customer" @if(old('role') == 'Customer') selected @endif>Customer</option>
                </select>
                @error('role')
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <!-- Button Add -->  
            <div class="flex justify-center mt-5">
                <button class="bg-orange-900 text-white text-center py-4 px-10 rounded-lg hover:bg-[#c54b22] transition-all">{{ __('Add') }}</button>
            </div>          
        </form>
    
    </section>
    <div class="text-center font-bold text-2xl mb-5 py-7 text-white bg-red-900"></div>
    
@endsection