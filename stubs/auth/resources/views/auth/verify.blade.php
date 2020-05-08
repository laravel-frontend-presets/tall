@extends('layouts.auth')
@section('title', __('auth.verify.title'))

@section('content')
    <div>
        @livewire('auth.verify')
    </div>
@endsection
