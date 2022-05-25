@extends('layouts.app')

@section('content')
    <h1 class="text-center font-bold text-2xl mb-5 py-3 text-white bg-[#a43636]">Show User</h1>
    <div class="flex justify-center mb-5">
        <a class="text-center text-red-700 font-bold border-2 border-[#943a19] py-2 px-5 rounded-lg hover:scale-105 transition-all" href="{{ url('users') }}">User Module</a>
    </div>
    <table class="mx-auto rounded-xl overflow-hidden">
        <tbody>
            <tr class="bg-orange-900 text-white">
                <th class="py-4 text-xl px-10 text-right">Fullname:</th>
                <td class="py-4 text-xl px-10 text-gray-200">{{ $user->fullname }}</td>
            </tr>
            <tr class="bg-orange-800 text-white">
                <th class="py-4 text-xl px-10 text-right">Email:</th>
                <td class="py-4 text-xl px-10 text-gray-200">{{ $user->email }}</td>
            </tr>
            <tr class="bg-orange-900 text-white">
                <th class="py-4 text-xl px-10 text-right">Phone:</th>
                <td class="py-4 text-xl px-10 text-gray-200">{{ $user->phone }}</td>
            </tr>
            <tr class="bg-orange-800 text-white">
                <th class="py-4 text-xl px-10 text-right">Address:</th>
                <td class="py-4 text-xl px-10 text-gray-200">{{ $user->address }}</td>
            </tr>
            <tr class="bg-orange-900 text-white">
                <th class="py-4 text-xl px-10 text-right">Role:</th>
                <td class="py-4 text-xl px-10 text-gray-200">{{ $user->role }}</td>
            </tr>
            <tr class="bg-orange-800 text-white">
                <th class="py-4 text-xl px-10 text-right">Active:</th>
                <td class="py-4 text-xl px-10 text-gray-200">{{ $user->active }}</td>
            </tr>
            <tr class="bg-orange-900 text-white">
                <th class="py-4 text-xl px-10 text-right">Created At:</th>
                <td class="py-4 text-xl px-10 text-gray-200">{{ $user->created_at }}</td>
            </tr>
            
        </tbody>
    </table>
@endsection