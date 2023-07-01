<x-app-layout>
    <div class="preloader">
        <span class="preloader__back">GM-develop GM-develop</span>
        <p class="preloader__forward">
            Welcome to my site
            <span class="preloader__background"></span>
        </p>
    </div>
<main>
    <section class="main-section container-fluid fillViewport">
        <article class="container about">
            <div class="about__heading aboutHeading">
                <h2 class="heading__title">Profile <span class="title__accent">{{$user->name}}</span></h2>
            </div>
            <div class="about__content content">
                <div class="col-6">
                    {{$user->getFirstMedia('avatars')}}
                </div>
                <h3 class="text-center">Welcome {{$user->name}}!</h3>

            </div>
        </article>
    </section>
</main>
</x-app-layout>
