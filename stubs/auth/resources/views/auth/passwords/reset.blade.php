@extends('layouts.auth')
@section('title', __('auth.passwords.reset.title'))

@section('content')
    <div>
        @livewire('auth.passwords.reset', [
            'token' => $token
        ])
    </div>
@endsection
