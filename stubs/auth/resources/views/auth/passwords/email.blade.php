@extends('layouts.auth')
@section('title', __('Reset password'))

@section('content')
    <div>
        @livewire('auth.passwords.email')
    </div>
@endsection
