<x-guest-layout>
    <div class="preloader">
        <span class="preloader__back">GM-develop GM-develop</span>
        <p class="preloader__forward">
            Welcome to my site
            <span class="preloader__background"></span>
        </p>
    </div>
    <main class="container-fluid" style="margin-top: 10rem">
        <section class="contact mt-lg-5" id="sectionLogin">
            <div class="contact__heading contactHeading">
                <h2 class="heading__title">Please <span class="title__accent">Register</span></h2>
            </div>
            <div class="container">
                <div class="section__box contact__box">
                    <div class="row row-cols-2"></div>
                    <div class="contact__text col-lg-8 mt-lg-5">
                        <p class="text-center" style="font-size: 1.5rem">You can register via<br>social networks.</p>
                        <div class="text-center" style="font-size: 2rem">
                            <a href="#"><i class="fa fa-vk"></i></a>
                            <a href="#"><i class="fa fa-github"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="container">
                            <div class="row">
                                <form method="POST" action="{{ route('register') }}" class="form-group contact__form">
                                @csrf
                                    <div class="row d-flex justify-content-between">
                                        <div class="col-4">
                                            <div class="form-group">
                                                <div>
                                                    <label for="avatar" class="">{{ __('Аватар (опционально)') }}</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input id="avatar" type="file" class="form-control" name="avatar">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Name -->
                                        <div class="col-8">
                                            <div>
                                                <x-input-label for="name" :value="__('Name')" />
                                                <x-text-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                            </div>

                                            <!-- Email Address -->
                                            <div class="mt-4">
                                                <x-input-label for="email" :value="__('Email')" />
                                                <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" />
                                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                            </div>

                                            <!-- Password -->
                                            <div class="mt-4">
                                                <x-input-label for="password" :value="__('Password')" />

                                                <x-text-input id="password" class="form-control"
                                                              type="password"
                                                              name="password"
                                                              required autocomplete="new-password" />

                                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                            </div>

                                            <!-- Confirm Password -->
                                            <div class="mt-4">
                                                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                                                <x-text-input id="password_confirmation" class="form-control"
                                                              type="password"
                                                              name="password_confirmation" required autocomplete="new-password" />

                                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-end mt-4">
                                        <a class="" href="{{ route('login') }}">
                                            {{ __('Already registered?') }}
                                        </a>

                                        <x-primary-button class="btn btn-outline-secondary custom__btn clay mb-5">
                                            {{ __('Register') }}
                                        </x-primary-button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-guest-layout>
