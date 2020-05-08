@extends('layouts.auth')
@section('title', __('Create a new account'))

@section('content')
    <div>
        @livewire('auth.register')
    </div>
@endsection
