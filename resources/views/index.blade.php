@extends('inc.header')

@section('content')

    @include('inc.navbar')

    @include('section.slider')

    <div class="movie-items  full-width">
        <div class="row">
            <div class="col-md-12">
                <div class="title-hd">
                    <h2>POPÜLER FİLMLER</h2>
                    <a href="{{ route('filmler.popular', 1) }}" class="viewall">Tümünü gör <i class="ion-ios-arrow-right"></i></a>
                </div>
                <div class="tabs">
                    <div class="tab-content">
                        <div id="tab1-h2" class="tab active">
                            <div class="row">
                                <div class="slick-multiItem2">            
                                    @foreach ($popularMovies as $movie)
                                        @if ($movie['vote_average'] != 0)
                                            <div class="slide-it">
                                                <div class="movie-item">
                                                    <div class="mv-img">
                                                        <img src="{{ 'https://image.tmdb.org/t/p/w500/' . $movie['poster_path'] }}" alt="">
                                                    </div>
                                                    <div class="hvr-inner">
                                                        <a href="{{ route('filmler.show', $movie['id']) }}"> İNCELE <i class="ion-android-arrow-dropright"></i> </a>
                                                    </div>
                                                    <div class="title-in">
                                                        <h6><a href="{{ route('filmler.show', $movie['id']) }}">{{ $movie['title'] }}</a></h6>
                                                        <p><i class="ion-android-star"></i><span> {{ $movie['vote_average'] }}</span> /10</p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="title-hd">
                    <h2>POPÜLER DİZİLER</h2>
                    <a href="{{ route('diziler.popular', 1) }}" class="viewall">Tümünü gör <i class="ion-ios-arrow-right"></i></a>
                </div>
                <div class="tabs">
                    <div class="tab-content">
                        <div id="tab21-h2" class="tab active">
                            <div class="row">
                                <div class="slick-multiItem2">
                                    @foreach ($popularShows as $show)
                                        @if (empty($show['origin_country']) || $show['origin_country'][0] != 'JP' )
                                            <div class="slide-it">
                                                <div class="movie-item">
                                                    <div class="mv-img">
                                                        <img src="{{ 'https://image.tmdb.org/t/p/w500/' . $show['poster_path'] }}" alt="">
                                                    </div>
                                                    <div class="hvr-inner">
                                                        <a href="{{ route('diziler.show', $show['id']) }}"> İNCELE <i class="ion-android-arrow-dropright"></i> </a>
                                                    </div>
                                                    <div class="title-in">
                                                        <h6><a href="{{ route('diziler.show', $show['id']) }}">{{ $show['name'] }}</a></h6>
                                                        <p><i class="ion-android-star"></i><span> {{ $show['vote_average'] }}</span> /10</p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('inc.footer')

    @endsection