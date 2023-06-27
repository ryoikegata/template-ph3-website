
@extends('layouts.index')

@section('content')
@include('components.header')
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
        <a href="{{route ('quiz.show', $question->id) }}">{{ $question->question }}</a>
        <div>
        <a href="{{route ('quiz.edit', $question->id) }}" class="">編集</a>

        <!-- modal -->
        <div id="deleteModal{{$question->id}}" class="hidden bg-white p-24 right-1/3 absolute ">
    <div class="modal-content">
        <h2>クイズ削除</h2>
        <p>本当に削除しますか？</p>
        <div class="modal-buttons">
            <a href="../quiz/delete/{{$question->id}}" class="">
        はい
    </a>
            <button id="cancelDelete">キャンセル</button>
        </div>
    </div>
</div>
<button class="delete-button" type="submit"  data-modal="deleteModal{{$question->id}}">削除</button>
        </div>
@foreach ($question->choices as $choice)
</div>
<div class="flex justify-center mt-9">
<button>{{ $choice->choice }}</button>
</div>
@endforeach
@endforeach
<a href="../quiz/create" class="flex justify-center pt-20">新規作成</a>
<script src="{{ asset('js/modal.js') }}"></script>
@endsection


