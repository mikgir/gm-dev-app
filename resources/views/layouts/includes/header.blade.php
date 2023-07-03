<header class="header">
    <nav class="navigation container">
        <div class="logo">
            <a href="{{route('main')}}" class="logo__text"><img
                    src="{{ asset('build/src/images/GM-develop_free-file.png') }}"
                    alt="logo"></a>
        </div>
        <ul class="menu">
            <li class="menu__item link1">
                <a href="{{route('main')}}" class="item__link">HOME</a>
            </li>
            <li class="menu__item link2">
                <a href="{{route('projects')}}" class="item__link">PORTFOLIO</a>
            </li>
            <li class="menu__item link3">
                <a href="{{route('posts')}}" class="item__link">BLOG</a>
            </li>
            <li class="menu__item link4">
                <a href="{{route('contact')}}" class="item__link">CONTACTS</a>
            </li>

                @if (Route::has('login'))
                        @auth
                            <li class="menu__item link5 d-flex">
                                <a class="item__link"
                                   href="{{route('profile.show')}}" title="Profile">
                                    <i class="fa fa-user" style="font-size: 1rem"></i>
                                </a>
                            </li>
                            <li class="menu__item link5 d-flex">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')"
                                                     onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        <i class="fa-solid fa-right-from-bracket"></i>
                                    </x-dropdown-link>
                                </form>
                            </li>
                        @else
                            <li class="menu__item link5">
                                <a class="item__link" href="{{route('login')}}">
                                    <i class="fa-solid fa-right-to-bracket"></i>
                                </a>
                            </li>
                        @endauth
                @endif
        </ul>
        <div class="menu__social-links socialLinks">
            <a href="https://github.com/mikgir" target="_blank" class="social-links__item">
                <i class="fab fa-github"></i>
            </a>
            <a href="https://vk.com/mikgir" target="_blank" class="social-links__item mt-lg-5">
                <i class="fab fa-vk"></i>
            </a>
            <a href="https://t.me/Mik_Gir" target="_blank" class="social-links__item mt-lg-5">
                <i class="fab fa-telegram"></i>
            </a>
        </div>
    </nav>
</header>
