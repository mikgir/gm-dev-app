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
                    <h2 class="heading__title">My <span class="title__accent">Blog</span> </h2>
                    <p class="text-center w-50 mx-auto my-3">Here I publish posts with my thoughts or description of events, as well as post my
                        favorite articles from other developers about the latest in IT.</p>
                </div>
                <div class="container">
                        @foreach($posts as $key=>$post)
                            <div class="section__box works_box mb-5">
                                <div class="flex-column gap-3 w-100 p-5">
                                    <div class="text-center my-5">
                                        <a href="{{route('posts.show', $post->id)}}">
                                            <h2>{{$post->title}}</h2>
                                        </a>
                                    </div>
                                    <div class="link__image text-center">
                                        <a href="{{route('posts.show', $post->id)}}" class="inline-block">
                                                <img src="{{$post->getFirstMediaUrl('p-image', 'p_image')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="text-end my-5">
                                        <span class="accent">Date: {{$post->created_at->diffForHumans()}}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                </div>
            </div>
        </section>
    </main>
</x-guest-layout>
