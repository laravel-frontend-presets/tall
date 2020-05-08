@extends('layouts.auth')
@section('title', __('Verify your email address'))

@section('content')
    <div>
        @livewire('auth.verify')
    </div>
@endsection
