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
                    <h2 class="heading__title">Post <span class="title__accent">{{$post->title}}</span> </h2>
                </div>
                <div class="text-end my-5">
                    <span class="accent">Date: {{$post->created_at->diffForHumans()}}</span>
                </div>
                <div class="link__image text-center w-100 mb-3">
                    <img src="{{$post->getFirstMediaUrl('p-image', 'p_image')}}" alt="" class="w-100">
                </div>
                <div class="container mb-5">
                    <div class="section__box works_box p-5">
                        <div class="col-11 mx-auto">
                                {!! $post->body !!}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-guest-layout>
