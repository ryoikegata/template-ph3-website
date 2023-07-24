<x-app-layout>
  <x-header></x-header>
<div class="mt-20 flex justify-center text-6xl">
    <h1>クイズ</h1>
</div>
    @foreach ($questions as $question)
    <div class="flex justify-center pt-20">
        <p>{{ $question->question }}</p>
@foreach ($question->choices as $choice)
</div>
<div class="flex justify-center mt-9">
<button class="choiceBtn" data-correct="{{ $choice->is_correct }}">{{ $choice->choice }}</button>
</div>
@endforeach
@endforeach

</x-app-layout>