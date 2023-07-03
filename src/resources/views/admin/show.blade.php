<x-head></x-head>
        @include('layouts.navigation')
<a href="">編集</a>
<div class="flex justify-center mt-20">
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
    </div>
