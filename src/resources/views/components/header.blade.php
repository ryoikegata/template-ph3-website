<header id="js-header" class="l-header p-header">
    <div class="p-header__logo"><img src="{{asset('assets/img/logo.svg')}}" alt="POSSE"></div>
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
          @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/admin') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
            @endif
        </ul>
      </nav>
      <div class="p-header__official">
        <a href="https://line.me/R/ti/p/@651htnqp?from=page" target="_blank" rel="noopener noreferrer" class="p-header__official__link--line">
          <i class="u-icon__line"></i>
          <span class="">POSSE公式LINEを追加</span>
          <i class="u-icon__link"></i>
        </a>
        <a href="" class="p-header__official__link--website">POSSE 公式サイト<i class="u-icon__link"></i></a>
      </div>
    </div>
  </header>