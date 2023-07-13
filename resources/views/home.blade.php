@extends('layouts.layout')
@section('title')
@section('content')
    @foreach ($collection as $item)
        @include('option')
    @endforeach
@endsection