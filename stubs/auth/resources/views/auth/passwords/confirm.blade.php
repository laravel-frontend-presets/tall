@extends('layouts.auth')
@section('title', 'Confirm your password')

@section('content')
    <div>
        @livewire('auth.passwords.confirm')
    </div>
@endsection
