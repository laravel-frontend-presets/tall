@extends('layouts.auth')
@section('title', __('auth.passwords.confirm.title'))

@section('content')
    <div>
        @livewire('auth.passwords.confirm')
    </div>
@endsection
