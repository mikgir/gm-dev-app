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
                    <h2 class="heading__title">My <span class="title__accent">Works</span> </h2>
                    <p class="text-center w-50 mx-auto my-3">I invite you to get acquainted with the projects that I carried out independently or in a team.</p>
                </div>
                <div class="container">
                    @foreach($projects as $key=>$project)
                    <div class="section__box works_box mb-5">
                        <div class="mockup w-75 h-75">
                            <img src="{{ asset('build/src/images/macFront.png') }}" alt="" class="mockup__img">
                            <div class="link__image">
                                <div style="width: 100%; height: 100%">
                                    <img src="{{$project->getFirstMediaUrl('cover', 'cover')}}" alt="" style="width: 100%; height: 100%">
                                </div>
                            </div>
                            <a href="{{route('projects.show', $project->id)}}" class="works__link"></a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
</x-guest-layout>
