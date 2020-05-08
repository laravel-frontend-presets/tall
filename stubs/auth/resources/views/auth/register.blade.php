@extends('layouts.auth')
@section('title', __('auth.register.title'))

@section('content')
    <div>
        @livewire('auth.register')
    </div>
@endsection
