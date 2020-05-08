@extends('layouts.auth')
@section('title', __('auth.passwords.email.title'))

@section('content')
    <div>
        @livewire('auth.passwords.email')
    </div>
@endsection
