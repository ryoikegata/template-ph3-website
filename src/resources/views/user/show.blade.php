@extends('layouts.index')

@section('content')
<a href="">編集</a>
@foreach ($question as $q)
<div>
        <p>{{ $q->question }}</p>
        </div>
        @foreach ($q->choices as $choice)
<div>
        <p>{{ $choice->choice }}</p>
        </div>
    @endforeach
    @endforeach
@endsection