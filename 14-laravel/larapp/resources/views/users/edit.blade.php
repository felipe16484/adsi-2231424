@extends('layouts.app2')

@section('content')

    <h1>Edit User</h1>
    <a href="{{ url('users') }}">User Module</a>
    
    <x-guest-layout>
        <x-auth-card>
            
            <x-slot name="logo">
                <a href="/">
                </a>
            </x-slot>
    
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
    
            <header class="w-full font-semibold bg-emerald-600 text-white py-5 px-6 sm:rounded-md text-center">
                {{ __('Add User') }}
            </header>
    
            <form class="mt-5" method="POST" action="{{ url('users/'.$user->id) }}">
                @csrf
                @method('put')

                <!-- Name -->
                <div>
                    <x-label for="fullname" :value="__('general.fullname')" />
    
                    <x-input id="fullname" class="block mt-1 w-full" type="text" name="fullname" value="{{old('fullname', $user->fullname)}}" required autofocus />
                </div>
    
                <!-- Email Address -->
                <div class="mt-4">
                    <x-label for="email" :value="__('general.email')" />
    
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{old('email', $user->email)}}" required />
                </div>
    
                <!-- Phone -->
                <div class="mt-4">
                    <x-label for="phone" :value="__('general.phone')" />
    
                    <x-input id="phone" class="block mt-1 w-full" type="number" name="phone" value="{{old('phone', $user->phone)}}" required />
                </div>
    
                <!-- Date -->
                <div class="mt-4">
                    <x-label for="date" :value="__('general.birthdate')" />
    
                    <x-input id="date" class="block mt-1 w-full" type="date" name="birthday" value="{{old('birthday', $user->birthday)}}" required />
                </div>
    
                <!-- Date -->
                <div class="mt-4">
                    <x-label for="gender" :value="__('general.gender')" />
    
                    <select name="gender" id="gender" class="block mt-1 w-full rounded-md">
                        <option value="" @if(!old('gender', $user->gender)) selected @endif disabled>---</option>
                        <option value="Male" @if(old('gender', $user->gender) == 'Male') selected @endif>Male</option>
                        <option value="Female" @if(old('gender', $user->gender) == 'Female') selected @endif>Female</option>
                    </select>
                </div>
    
                <div class="mt-4">
                    <x-label for="address" :value="__('general.address')" />
    
                    <x-input id="address" class="block mt-1 w-full" type="text" name="address" value="{{old('address', $user->address)}}" required />
                </div>

                <div class="mt-4">
                    <x-label for="role" :value="__('general.role')" />
    
                    <select name="role" id="role" class="block mt-1 w-full rounded-md">
                        <option value="" @if(!old('role', $user->role)) selected @endif disabled>---</option>
                        <option value="Admin" @if(old('role', $user->role) == 'Admin') selected @endif>Admin</option>
                        <option value="Customer" @if(old('role', $user->role) == 'Customer') selected @endif>Customer</option>
                    </select>

                    @error('role')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
    
                
                <x-button class="ml-4">
                    {{ __('Edit') }}
                </x-button>
            </form>
        </x-auth-card>
    </x-guest-layout>
    
@endsection