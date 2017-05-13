@extends('layouts.app')

@section('content')
    @if (count($favorites) > 0)
        @include('microposts.microposts', ['microposts' => $favorites])
    @endif
@endsection