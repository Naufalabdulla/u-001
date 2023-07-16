@extends('layouts.layout')
@section('content')
      <div class="flex-col border border-gray-300 rounded-lg p-5 mb-10 justify-center">
        <h1 class="text-white font-bold text-7xl mb-2">{{$hiragana->hiragana}}</h1>
      </div>
      <div class="flex gap-4 mt-10 items-center">
        @foreach ($alphabet as $item)
            <div class="flex border border-gray-300 rounded-lg w-16 h-16 justify-center items-center hover:brightness-50">
              <div class="text-white">{{$item->alphabet->letter}}</div>
            </div>
        @endforeach
      </div>
      
@endsection
