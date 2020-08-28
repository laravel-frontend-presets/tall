@extends('layouts.base')

@section('body')
    @yield('content')
    {{ $slot ?? null }}
@endsection
