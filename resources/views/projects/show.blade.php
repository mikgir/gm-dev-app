<x-guest-layout>
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
                    <h2 class="heading__title">Project <span class="title__accent">{{$project->title}}</span> </h2>
                </div>
                <div class="container mb-5">
                    <div class="section__box works_box">
                        <div class="mockup w-75 h-75">
                                <img src="{{ asset('build/src/images/macFront.png') }}" alt="" class="mockup__img">
                                <div class="link__image">
                                    <img src="{{$project->getFirstMediaUrl('cover', 'cover')}}" alt="" style="width: 100%; height: 100%">
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container-fluid paralax mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-11 mx-auto mt-5">
                        {!! $project->description !!}
                    </div>
                    <div class="row justify-content-between w-100">
                        <div class="col-6 text-center">
                            <a href="{{$project->web_link}}" target="_blank" class="">See web site <i class="far fa-newspaper"></i></a>
                        </div>
                        <div class="col-6 text-center">
                            <a href="{{$project->git_link}}" target="_blank" class="">See on GitHub <i class="far fa-newspaper"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-guest-layout>
