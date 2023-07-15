@extends('layouts.layout')
@section('content')
      <div class="flex-col border border-gray-300 rounded-lg p-5 justify-center">
        <h1 class="text-white font-bold text-7xl mb-2">{{$hiragana->hiragana}}</h1>
        <p class="text-white text-center capitalize"> {{$hiragana->alphabet->letter}} </p>
      </div>
      {{$hiragana->}}
@endsection
