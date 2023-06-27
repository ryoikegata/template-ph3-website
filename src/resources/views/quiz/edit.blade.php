@extends ('layouts.index')
@section('content')
@include('components.header')


<h1 class="pt-40 flex justify-center">クイズ編集</h1>
@foreach ($question as $q)
<form action="{{route ('quiz.update', $q->id) }}" class="pt-10" method="POST">
@csrf
@method('PATCH')
  <div class="flex justify-center items-center">
    <label for="">question</label>
  <input type="text" class="mt-5 ml-5" name="question" value="{{ $q->question }}">
  </div>
  @foreach ($q->choices as $index => $choice)
  <div class="flex justify-center items-center">
    <label for="">choice{{$index + 1 }}</label>
  <input type="text" class="mt-5 ml-5" name="choice{{$index + 1}} " value="{{ $choice->choice }}">
  <input type="hidden" name="choice_id{{$index + 1 }}" value="{{ $choice->id }}">
  </div>
      @endforeach
  <div class="flex justify-center items-center">
    <label for="">correct</label>
  @foreach ($q->choices as $index => $choice)
    <input type="radio" value="1" name="selected{{$index + 1}}">
    <label for="">choice{{$index + 1}}</label>
    @endforeach
  </div>
  <button class="flex justify-center mt-5 text-blue-500 underline" type="submit">更新</button>
</form>
@endforeach
@endsection