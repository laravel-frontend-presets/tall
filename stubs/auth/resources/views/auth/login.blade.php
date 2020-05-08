@extends('layouts.auth')
@section('title', __('auth.login.title'))

@section('content')
    <div>
        @livewire('auth.login')
    </div>
@endsection
