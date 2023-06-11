
@extends('layouts.index')

@section('content')
@include('components.top.header')
@if(session('message'))
    <div class="alert alert-success z-20 flex justify-center mt-20">
        {{ session('message') }}
    </div>
@endif
<div class="mt-20 flex justify-center text-6xl">
    <h1>クイズ一覧</h1>
</div>
    @foreach ($questions as $question)
    <div class="flex justify-center pt-20">
        <a href="/quiz/show/{{ $question->id }}">{{ $question->question }}</a>
        <div>
        <a href="../edit" class="">編集</a>
        <a href="../quiz/delete/{{$question->id}}" class="">削除</a>
        </div>
@foreach ($question->choices as $choice)
</div>
<div class="flex justify-center mt-9">
<button>{{ $choice->choice }}</button>
</div>
@endforeach
@endforeach
<a href="../quiz/create" class="flex justify-center pt-20">新規作成</a>
@endsection


