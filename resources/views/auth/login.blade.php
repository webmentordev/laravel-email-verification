@extends('layouts.app')
@section('content')
    <div>
        <h1 class="text-center font-bold">Login Form</h1>
        <form action="{{ route('login') }}" method="POST" class="mb-2">
            @csrf
            <div class="my-3">
                <input type="email" name="email" placeholder="Email Address"
                class="bg-gray-200 w-full p-3 rounded-lg">
            </div>
            <div class="my-3">
                <input type="password" name="password" placeholder="Password"
                class="bg-gray-200 w-full p-3 rounded-lg">
            </div>
            <button type="submit" class="w-full bg-gray-900 text-white p-3 rounded-lg">Login</button>
        </form>
        <p class="text-sm">Don't have an account? <a href="{{ route('register') }}" class="underline text-gray-400">Register</a></p>
    </div>
@endsection