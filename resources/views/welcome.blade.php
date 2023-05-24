@extends('layout')

@section('content')
    <section class="section">
        <div class="container">
            <h1 class="title is-1 has-text-centered">
                LaravelCDN : optimisation de la vitesse de chargement grâce à KeyCDN
            </h1>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <!-- Slider main container -->
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide"><img src="{{ Vite::asset('resources/images/neom-fYTVHcpak2g-unsplash.jpg') }}" alt=""></div>
                    <div class="swiper-slide"><img src="{{ Vite::asset('resources/images/nick-hang--fdaq2dr1Ro-unsplash.jpg') }}" alt=""></div>
                    <div class="swiper-slide"><img src="{{ Vite::asset('resources/images/francesco-ungaro-qMMEsyofxe8-unsplash.jpg') }}" alt=""></div>
                    <div class="swiper-slide"><img src="{{ Vite::asset('resources/images/yasintha-perera-tevq6l3Niv0-unsplash.jpg') }}" alt=""></div>
                </div>
            </div>

        </div>
    </section>

    <section class="section">
        <div class="container">
            <h2 class="title is-2">Les meilleurs catégories</h2>

            <div class="columns is-multiline">
                @foreach($bestCategories as $category)
                    <div class="column is-3">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image is-4by3">
                                    <img src="{{$category->pictureUrl()}}" alt="{{$category->name}}">
                                </figure>
                            </div>
                            <div class="card-content">
                                <div class="media">
                                    <div class="media-content">
                                        <p class="title is-4">{{$category->name}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <h2 class="title is-2">Les meilleurs produits</h2>

            <div class="columns is-multiline">
                @foreach($bestProducts as $product)
                    <div class="column is-3">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image is-4by3">
                                    <img src="{{$product->pictureUrl()}}" alt="{{$product->name}}">
                                </figure>
                            </div>
                            <div class="card-content">
                                <div class="media">
                                    <div class="media-content">
                                        <p class="title is-4">
                                            <span class="">{{$product->name}}</span>
                                            <span class="is-pulled-right">{{number_format($product->price, 2, '.', ' ')}}€</span>
                                        </p>
                                        <p class="subtitle is-6">{{$product->category->name}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <h2 class="title is-2">Blog</h2>

            <div class="columns is-multiline">
                @foreach($posts as $post)
                    <div class="column is-4">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image is-4by3">
                                    <img src="{{$post->pictureUrl()}}" alt="Placeholder image">
                                </figure>
                            </div>
                            <div class="card-content">
                                <div class="media">
                                    <div class="media-content">
                                        <p class="title is-4">{{$post->title}}</p>
                                        <p class="subtitle is-6">@LCDev - Le <time>{{$post->created_at->format('d/m/Y')}}</time></p>
                                    </div>
                                </div>

                                <div class="content">
                                    {{$post->excerpt}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="column">
                    <img src="{{Vite::asset('resources/images/daniel-salcius-RRcYcdGY630-unsplash.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </section>
@endsection
