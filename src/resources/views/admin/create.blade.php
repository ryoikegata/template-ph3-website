<x-head></x-head>
        @include('layouts.navigation')

<h1 class="pt-40 flex justify-center">新規作成</h1>
<form action="{{ route('admin.store') }}" class="pt-10" method="post" enctype="multipart/form-data">
@csrf
  <div class="flex justify-center items-center">
    <label for="">question</label>
  <input type="text" class="mt-5 ml-5" name="question">
  </div>
  <div class="flex justify-center items-center">
    <label for="">choice1</label>
  <input type="text" class="mt-5 ml-5" name="choice1" value="">
  </div>
  <div class="flex justify-center items-center">
    <label for="">choice2</label>
  <input type="text" class="mt-5 ml-5" name="choice2" value="">
  </div>
  <div class="flex justify-center items-center">
    <label for="">choice3</label>
  <input type="text" class="mt-5 ml-5" name="choice3" value="">
  </div>
  <div class="flex justify-center items-center">
    <label for="">correct</label>
    <input value="1" type="checkbox" name="selected[]">
    <label for="">choice1</label>
    <input value="2" type="checkbox" name="selected[]">
    <label for="">choice2</label>
    <input value="3" type="checkbox" name="selected[]">
    <label for="">choice3</label>
  </div>
  <div>
    <label for="">画像</label>
    <input type="file" name="image">
  </div>
  <button class="flex justify-center mt-5 text-blue-500 underline" type="submit">新規作成</button>
</form>
