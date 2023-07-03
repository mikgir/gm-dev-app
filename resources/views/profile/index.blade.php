<x-app-layout>
    <div class="preloader">
        <span class="preloader__back">GM-develop GM-develop</span>
        <p class="preloader__forward">
            Welcome to my site
            <span class="preloader__background"></span>
        </p>
    </div>

    <main class="container-fluid">
        <section class="main-section fillViewport">
            <div class="container">
                <div class="contact__heading ">
                    <h2 class="heading__title">Profile <span class="title__accent">{{$user->name}}</span> </h2>
                    <p class="text-center w-50 mx-auto my-3">Here you can fill in and change your personal details, place an order and leave your feedback.</p>
                </div>
                <div class="container">
                        <div class="section__box works_box mb-5" style="min-height: 150vh">
                            <div class="row w-100 mt-5">
                                <div class="item__img" style="width: 10rem; height: 10rem; margin-top: -5rem; margin-left: 2rem">
                                    <img src="{{$user->getFirstMediaUrl('avatars', 'thumb')}}" alt="avatar" style="width: 100%; height: auto; border-radius: 100%;">
                                </div>
                            </div>
                            <div class="row d-flex justify-content-between px-5">
                                <div class="col-4">
                                    <div class="">
                                        @include('profile.partials.update-profile-information-form')

                                    </div>
                                    <div class="">
                                        @include('profile.partials.update-password-form')

                                    </div>
                                    <div class="">
                                        @include('profile.partials.delete-user-form')
                                    </div>
                                </div>
                                <div class="col-7">
                                    <div class="">
                                        <h2 class="">
                                            {{ __('Personal Information') }}
                                        </h2>
                                        <p class="">
                                            {{ __("Update your personal data - first name, last name, date of birth, city, country, phone number.") }}

                                        </p>
                                        <div class="">
                                            @if(isset($user->profile))
                                                @include('profile.edit', ['profile' => $user->profile])
                                            @else
                                                @include('profile.create', ['profile' => $user->profile])
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>
            </div>
        </section>
{{--    <section class="main-section container-fluid fillViewport">--}}
{{--        --}}
{{--        <article class="container about">--}}
{{--            <div class="about__heading aboutHeading">--}}
{{--                <h2 class="heading__title">Profile <span class="title__accent">{{$user->name}}</span></h2>--}}
{{--            </div>--}}
{{--            <div class="about__content content">--}}
{{--                <div class="col-6">--}}
{{--                    <img src="{{$user->getFirstMediaUrl('avatars', 'thumb')}}" alt="avatar" class="tox-user__avatar">--}}
{{--                </div>--}}
{{--                <h3 class="text-center">Welcome {{$user->name}}!</h3>--}}

{{--            </div>--}}
{{--        </article>--}}
{{--    </section>--}}
</main>
</x-app-layout>
