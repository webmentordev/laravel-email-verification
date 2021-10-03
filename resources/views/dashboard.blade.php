@extends('layouts.app')
@section('content')
    <div>
        <h1>Welcome to Dashboard, {{ auth()->user()->name }}</h1>
    </div>
@endsection