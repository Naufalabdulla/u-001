@extends('layouts.layout')
@section('title')
@section('content')
    <div class="flex-col">
        @foreach ($collection as $item)
            @include('option')
        @endforeach
    </div>
@endsection