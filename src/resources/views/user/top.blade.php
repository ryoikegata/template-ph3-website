@extends('layouts.index')

@section('content')
@include('components.top.header')

<main class="main">
    <section class="top__hero">
        <div class="top__hero__heading">
            <h2 class="top__hero__lead">学生プログラミングコミュニティ POSSE（ポッセ）</h2>
            <h1 class="top__hero__title">自分史上最高<br class="break">を仲間と。</h1>
        </div>
        <div class="top__hero__thumbnail">
            <img src="{{ asset('images/img-hero.jpg') }}" alt="top__hero-img" />
        </div>
        <small class="top__hero__inducing">Scroll Down</small>
    </section>

    <section class="about">
        <div class="about__heading">
            <h2 class="about__title">POSSEとは</h2>
            <h3 class="about__subtitle">About POSSE</h3>
        </div>
        <div class="about__content">
            <div class="about__thumbnail">
                <img src="{{ asset('images/img-about.jpg') }}" alt="about-img" />
            </div>
            <p class="about__text">
                学生プログラミングコミュニティ「POSSE(ポッセ)」は、人格とプログラミング、二つの面での成長をスローガンに活動しており、大学生だけが集まって学びを深めるコミュニティです。<br>プログラミングだけではありません。オフラインでのイベントや、旅行など様々な企画を行っています！<br>それらを通じて、夏休みの大半をPOSSEで出来た仲間と過ごす人もたくさんいるほどメンバーとの仲が深まります。
            </p>
        </div>
    </section>

</main>

    @include('components.top.line')
    @include('components.top.footer')

@endsection


