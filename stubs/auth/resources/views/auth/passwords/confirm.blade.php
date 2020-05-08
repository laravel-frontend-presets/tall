@extends('layouts.auth')
@section('title', __('Confirm your password'))

@section('content')
    <div>
        @livewire('auth.passwords.confirm')
    </div>
@endsection
