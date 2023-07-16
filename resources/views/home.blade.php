@extends('layouts.layout')
@section('title')
@section('content')
    <div class="">
        @foreach ($collection as $item)
            @include('option')
        @endforeach
    </div>
@endsection