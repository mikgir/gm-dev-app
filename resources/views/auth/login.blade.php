<x-guest-layout>
    <div class="preloader">
        <span class="preloader__back">GM-develop GM-develop</span>
        <p class="preloader__forward">
            Welcome to my site
            <span class="preloader__background"></span>
        </p>
    </div>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <main class="container-fluid" style="margin-top: 10rem">
        <section class="contact mt-lg-5" id="sectionLogin">
            <div class="contact__heading contactHeading">
                <h2 class="heading__title">Please <span class="title__accent">Sign In</span></h2>
            </div>
            <div class="container">
                <div class="section__box contact__box">
                    <div class="row row-cols-2"></div>
                    <div class="contact__text col-lg-8 mt-lg-5">
                        <p class="text-center" style="font-size: 1.5rem">Don't you have an account on the site yet? <br> You can register
                            <a href="{{ route('register') }}" class="item__link" style="border-bottom: 2px solid #FF6E30;">here</a>.</p>
                        <p class="text-center" style="font-size: 1.5rem">You can log in via <br>social networks.</p>
                        <div class="text-center" style="font-size: 2rem">
                            <a href="#"><i class="fa fa-vk"></i></a>
                            <a href="#"><i class="fa fa-github"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <form method="POST" action="{{ route('login') }}" class="form-group contact__form">
                        @csrf

                        <!-- Email Address -->
                            <div>
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <!-- Password -->
                            <div class="mt-4">
                                <x-input-label for="password" :value="__('Password')" />

                                <x-text-input id="password" class="form-control"
                                              type="password"
                                              name="password"
                                              required autocomplete="current-password" />

                                <x-input-error :messages="$errors->get('password')" class="form-control mt-2" />
                            </div>

                            <!-- Remember Me -->
                            <div class="block mt-4">
                                <label for="remember_me" class="">
                                    <input id="remember_me" type="checkbox" class="form-check" name="remember">
                                    <span class="">{{ __('Remember me') }}</span>
                                </label>
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                @if (Route::has('password.request'))
                                    <a class="" href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif

                                <x-primary-button class="btn btn-outline-secondary custom__btn clay">
                                    {{ __('Log in') }}
                                </x-primary-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-guest-layout>
