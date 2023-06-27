@extends('layouts.index')

@section('content')

        <header id="js-header" class="l-header p-header">
            <div class="p-header__logo"><img src="{{asset('img/logo.svg')}}" alt="POSSE"></div>
            <button class="p-header__button" id="js-headerButton"></button>
            <div class="p-header__inner">
                <nav class="p-header__nav">
                    <ul class="p-header__nav__list">
                        <li class="p-header__nav__item">
                            <a href="../" class="p-header__nav__item__link">POSSEとは</a>
                        </li>
                        <li class="p-header__nav__item">
                            <a href="/q" class="p-header__nav__item__link">クイズ</a>
                        </li>
                    </ul>
                </nav>
                <div class="p-header__official">
                    <a href="https://line.me/R/ti/p/@651htnqp?from=page" target="_blank" rel="noopener noreferrer"
                        class="p-header__official__link--line">
                        <i class="u-icon__line"></i>
                        <span class="">POSSE公式LINEを追加</span>
                        <i class="u-icon__link"></i>
                    </a>
                    <a href="" class="p-header__official__link--website">POSSE 公式サイト<i
                            class="u-icon__link"></i></a>
                </div>
                <ul class="p-header__sns p-sns">
                    <li class="p-sns__item">
                        <a href="https://twitter.com/posse_program" target="_blank" rel="noopener noreferrer"
                            class="p-sns__item__link" aria-label="Twitter">
                            <i class="u-icon__twitter"></i>
                        </a>
                    </li>
                    <li class="p-sns__item">
                        <a href="https://www.instagram.com/posse_programming/" target="_blank" rel="noopener noreferrer"
                            class="p-sns__item__link" aria-label="instagram">
                            <i class="u-icon__instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </header>

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

    @include('components.line')
    @include('components.footer')

@endsection


