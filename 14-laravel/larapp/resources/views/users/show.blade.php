@extends('layouts.app2')

@section('content')
    <h1>Show User</h1>
    <a href="{{ url('users') }}"><-- User Module</a>
    <table>
        <tbody>
            <tr>
                <th>Fullname:</th>
                <td>{{ $user->fullname }}</td>
            </tr>
            <tr>
                <th>Email:</th>
                <td>{{ $user->email }}</td>
            </tr>
            <tr>
                <th>Phone:</th>
                <td>{{ $user->phone }}</td>
            </tr>
            <tr>
                <th>Address:</th>
                <td>{{ $user->address }}</td>
            </tr>
            <tr>
                <th>Role:</th>
                <td>{{ $user->role }}</td>
            </tr>
            <tr>
                <th>Active:</th>
                <td>{{ $user->active }}</td>
            </tr>
            <tr>
                <th>Created At:</th>
                <td>{{ $user->created_at }}</td>
            </tr>
            
        </tbody>
    </table>
@endsection