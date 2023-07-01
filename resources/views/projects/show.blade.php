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
                <div class="container">
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
        <section class="main-section fillViewport">
            <div class="container">
                <p class="text-center w-50 mx-auto my-3">{!! $project->description !!}</p>
                <div class="row justify-content-center w-100">
                    <div class="col-8">
                        <a href="#" class=""><i class="fab fa-github"></i></a>
                        <a href="#" class=""><i class="fa fa-browser"></i></a>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-guest-layout>
