@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10">
    <div class="flex">
        <div class="w-full">
            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">
                <header class="font-semibold bg-blue-900 text-white py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                    </svg>
                    {{ __('Edit User') }}
                </header>

                <nav class="flex items-center justify-center py-4" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-3">
                        <li class="inline-flex items-center">
                        <a href="{{ url('dashboard') }}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                            <svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                            Dashboard
                        </a>
                        </li>
                        <li>
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                            <a href="{{ url('users') }}" class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white">Users Module</a>
                        </div>
                        </li>
                        <li>
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                            <a href="#" class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white">Edit User</a>
                        </div>
                        </li>
                    </ol>
                </nav>

                <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST"
                    action="{{ url('users/'.$user->id) }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" id="" value="{{ $user->id }}">
                    @method('put')
                    <div class="flex flex-wrap">
                        <label for="fullname" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            @lang('general.label-fname'):
                        </label>

                        <input id="fullname" type="text" class="form-input w-full @error('fullname')  border-red-500 @enderror"
                            name="fullname" value="{{ old('fullname', $user->fullname) }}" required autocomplete="fullname" autofocus>

                        @error('name')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            @lang('general.label-email'):
                        </label>

                        <input id="email" type="email"
                            class="form-input w-full @error('email') border-red-500 @enderror" name="email"
                            value="{{ old('email', $user->email) }}" required autocomplete="email">

                        @error('email')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="phone" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            @lang('general.label-phone'):
                        </label>

                        <input id="phone" type="text"
                            class="form-input w-full @error('phone') border-red-500 @enderror" name="phone"
                            value="{{ old('phone', $user->phone) }}" required autocomplete="phone">

                        @error('phone')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="birthday" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            @lang('general.label-bdate'):
                        </label>

                        <input id="birthday" type="date"
                            class="form-input w-full @error('birthday') border-red-500 @enderror" name="birthday"
                            value="{{ old('birthday', $user->birthday) }}" required autocomplete="birthday">

                        @error('birthday')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="gender" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                             @lang('general.label-gender'):
                        </label>
                        
                        <select name="gender" id="gender" class="form-select w-full @error('gender') border-red-500 @enderror" required>
                            <option value="" @if(!old('gender', $user->gender)) selected @endif disabled> @lang('general.option-gender')</option>
                            <option value="Female" @if(old('gender', $user->gender) == "Female") selected @endif>Female</option>
                            <option value="Male" @if(old('gender', $user->gender) == "Male") selected @endif>Male</option>
                        </select>

                        @error('gender')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="address" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                             @lang('general.label-address'):
                        </label>

                        <input id="address" type="text"
                            class="form-input w-full @error('address') border-red-500 @enderror" name="address"
                            value="{{ old('address', $user->address) }}" required autocomplete="address">

                        @error('address')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap items-center justify-center bordered border-[#d2d6dc] border-2 rounded-lg">
                        <img id="preview"  class="rounded-lg" src="{{ asset($user->photo) }}" width="200px">
                    </div>

                    <div class="flex flex-wrap">
                        
                        <label for="photo" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            Photo:
                        </label>

                        <button type="button" class="btn-upload w-full select-none font-bold whitespace-no-wrap p-3 rounded-lg text-base leading-normal no-underline text-gray-100 bg-blue-900 hover:bg-blue-800 sm:py-4 flex gap-2 items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M4 5a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V7a2 2 0 00-2-2h-1.586a1 1 0 01-.707-.293l-1.121-1.121A2 2 0 0011.172 3H8.828a2 2 0 00-1.414.586L6.293 4.707A1 1 0 015.586 5H4zm6 9a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                            </svg>
                            Upload Picture
                        </button>

                        <input id="photo" type="file"
                            class="hidden form-input w-full @error('photo') border-red-500 @enderror" name="photo"
                            value="{{ old('photo') }}" accept="images/*">

                        @error('photo')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="role" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                             Role:
                        </label>
                        
                        <select name="role" id="role" class="form-select w-full @error('role') border-red-500 @enderror" required>
                            <option value="" @if(!old('role', $user->role)) selected @endif disabled>Select role...</option>
                            <option value="Admin" @if(old('role', $user->role) == "Admin") selected @endif>Admin</option>
                            <option value="Customer" @if(old('role', $user->role) == "Customer") selected @endif>Customer</option>
                        </select>

                        @error('role')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="active" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                             Active:
                        </label>
                        
                        <select name="active" id="active" class="form-select w-full @error('active') border-red-500 @enderror" required>
                            <option value="" @if(!old('active', $user->active)) selected @endif disabled>Select active...</option>
                            <option value="1" @if(old('active', $user->active) == 1) selected @endif>Active</option>
                            <option value="0" @if(old('active', $user->active) == 0) selected @endif>Inactive</option>
                        </select>

                        @error('active')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

 

                    <div class="flex flex-wrap pb-10">
                        <button type="submit"
                            class="w-full select-none font-bold whitespace-no-wrap p-3 rounded-lg text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700 sm:py-4">
                            Edit
                        </button>
                    </div>
                </form>

            </section>
        </div>
    </div>
</main>
@endsection