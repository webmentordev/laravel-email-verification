@extends('layouts.app')
@section('content')
    <div>
        <p class="mb-3">Verification email has been sent to your email.</p>
        @if (session('message'))
            <p class="bg-green-400 text-white text-center p-3 w-full rounded-lg">{{ session('message') }}</p>
        @endif
        <form action="{{ route('verification.send') }}" method="POST">
            @csrf
            <button type="submit" class="w-full p-3 rounded-lg bg-gray-900 text-white">Resend Verification Email</button>
        </form>
        
    </div>
@endsection