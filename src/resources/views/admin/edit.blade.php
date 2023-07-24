<x-head></x-head>
        @include('layouts.navigation')
        <h1 class="pt-40 flex justify-center">クイズ編集</h1>
        @if(session('message'))
    <div class="alert alert-success z-20 flex justify-center mt-20">
        {{ session('message') }}
    </div>
    @endif
@foreach ($question as $q)
<form action="{{ route('admin.update', $q->id) }}" class="pt-10" method="POST">
@csrf
@method('PATCH')
  <div class="flex justify-center items-center">
    <label for="">question</label>
  <input type="text" class="mt-5 ml-5" name="question" value="{{ $q->question }}">
  </div>
  @foreach ($q->choices as $index => $choice)
  <div class="flex justify-center items-center">
    <label for="">choice{{$index + 1 }}</label>
  <input type="text" class="mt-5 ml-5" name="choices{{$index + 1}}" value="{{ $choice->choice }}">
  <input type="hidden" name="choiceIds{{$index + 1}}" value="{{ $choice->id }}">
  </div>
      @endforeach
  <div class="flex justify-center items-center">
    <label for="">correct</label>
  @foreach ($q->choices as $index => $choice)
    <input type="radio" value="{{$choice->id}}" name="selected{{$index + 1}}">
    <label for="">choice{{$index + 1}}</label>
    @endforeach
  </div>
  <button class="flex justify-center mt-5 text-blue-500 underline" type="submit">更新</button>
</form>
@endforeach