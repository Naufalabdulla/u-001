@foreach ($hiragana as $item)
    <div>
      <h1>{{$item->hiragana}}</h1>
      <h1>{{$item->alphabet->letter}}</h1>
    </div>
@endforeach