@extends('layouts.app')
@section('content')
    <div>
        <h1 class="text-center font-bold">Register Form</h1>
        <form action="{{ route('register') }}" method="POST" class="mb-2">
            @csrf
            <div class="my-3">
                <input type="text" name="name" placeholder="Enter Name"
                class="bg-gray-200 w-full p-3 rounded-lg">
            </div>
            <div class="my-3">
                <input type="email" name="email" placeholder="Email Address"
                class="bg-gray-200 w-full p-3 rounded-lg">
            </div>
            <div class="my-3">
                <input type="password" name="password" placeholder="Password"
                class="bg-gray-200 w-full p-3 rounded-lg">
            </div>
            <div class="my-3">
                <input type="password" name="password_confirmation" placeholder="Repeat Password"
                class="bg-gray-200 w-full p-3 rounded-lg">
            </div>
            <button type="submit" class="w-full bg-gray-900 text-white p-3 rounded-lg">Register</button>
        </form>
        <p class="text-sm">Have an account? <a href="{{ route('login') }}" class="underline text-gray-400">login</a></p>
    </div>
@endsection