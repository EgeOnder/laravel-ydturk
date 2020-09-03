@extends('inc.header')

@section('content')

    @include('inc.navbar')

    <div class="hero mv-single-hero" style="background: url('{{ 'https://image.tmdb.org/t/p/original/' . $show['backdrop_path'] }}') !important; width: 100%;">
        <div class="container">
            <div class="row">
                
            </div>
        </div>
    </div>
    <div class="page-single movie-single movie_single">
        <div class="container">
            <div class="row ipad-width2">
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="movie-img sticky-sb">
                        <img src="{{ 'https://image.tmdb.org/t/p/w500/' . $show['poster_path'] }}" alt="poster-bg">
                        <div class="movie-btn">	
                        @if (count($show['videos']['results']) > 0)
                                <div class="btn-transform transform-vertical red">
                                    <div><a href="{{ 'https://youtube.com/watch?v=' . $show['videos']['results']['0']['key'] }}" class="item item-1 redbtn fancybox-media"> <i class="ion-play"></i> Fragmanı izle</a></div>
                                    <div><a href="{{ 'https://youtube.com/watch?v=' . $show['videos']['results']['0']['key'] }}" class="item item-2 redbtn fancybox-media hvr-grow"><i class="ion-play"></i></a></div>
                                </div>
                        @endif
                            <div class="btn-transform transform-vertical red">
                                <div><a href="#" class="item item-1 yellowbtn"> <i class="ion-play"></i> DİZİYİ İZLE</a></div>
                                <div><a href="#" class="item item-2 yellowbtn hvr-grow"><i class="ion-play"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="movie-single-ct main-content">
                        <h1 class="bd-hd">{{ $show['name'] }} 
                            <span>
                                {{ \Carbon\Carbon::parse($show['first_air_date'])->format('d M, Y') }}
                            </span>
                        </h1>
                        <div class="social-btn">
                            <a href="#" class="parent-btn"><i class="ion-heart"></i> Favorilere Ekle</a>		
                        </div>
                        <div class="movie-rate">
                            <div class="rate">
                                <i class="ion-android-star"></i>
                                <p><span>{{ $show['vote_average'] }}</span> /10<br></p>
                            </div>
                            <div class="rate-star">
                                <p>Yapımın Puanı:  </p>
                                @if ($show['vote_average'] >= 1)
                                    <i class="ion-ios-star"></i>
                                @else
                                    <i class="ion-ios-star-outline"></i>
                                @endif
                                @if ($show['vote_average'] >= 2)
                                    <i class="ion-ios-star"></i>
                                @else
                                    <i class="ion-ios-star-outline"></i>
                                @endif
                                @if ($show['vote_average'] >= 3)
                                    <i class="ion-ios-star"></i>
                                @else
                                    <i class="ion-ios-star-outline"></i>
                                @endif
                                @if ($show['vote_average'] >= 4)
                                    <i class="ion-ios-star"></i>
                                @else
                                    <i class="ion-ios-star-outline"></i>
                                @endif
                                @if ($show['vote_average'] >= 5)
                                    <i class="ion-ios-star"></i>
                                @else
                                    <i class="ion-ios-star-outline"></i>
                                @endif
                                @if ($show['vote_average'] >= 6)
                                    <i class="ion-ios-star"></i>
                                @else
                                    <i class="ion-ios-star-outline"></i>
                                @endif
                                @if ($show['vote_average'] >= 7)
                                    <i class="ion-ios-star"></i>
                                @else
                                    <i class="ion-ios-star-outline"></i>
                                @endif
                                @if ($show['vote_average'] >= 8)
                                    <i class="ion-ios-star"></i>
                                @else
                                    <i class="ion-ios-star-outline"></i>
                                @endif
                                @if ($show['vote_average'] >= 9)
                                    <i class="ion-ios-star"></i>
                                @else
                                    <i class="ion-ios-star-outline"></i>
                                @endif
                                @if ($show['vote_average'] >= 10)
                                    <i class="ion-ios-star"></i>
                                @else
                                    <i class="ion-ios-star-outline"></i>
                                @endif
                            </div>
                        </div>
                        <div class="movie-tabs">
                            <div class="tabs">
                                <ul class="tab-links tabs-mv">
                                    <li class="active"><a href="#overview">Genel Bakış</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="overview" class="tab active">
                                        <div class="row">
                                            <div class="col-md-8 col-sm-12 col-xs-12">
                                                <br>
                                                <p>{{ $show['overview'] }}</p>
                                                <div class="title-hd-sm">
                                                    <h4>oyuncular</h4>
                                                </div>
                                                
                                                <div class="mvcast-item">		
                                                    @foreach ($show['credits']['cast'] as $cast)
                                                        @if ($loop->index < 9)
                                                            <div class="cast-it">
                                                                <div class="cast-left">
                                                                    <img src="{{ 'https://image.tmdb.org/t/p/w92/' . $cast['profile_path'] }}" alt="pp">
                                                                    <a href="#">{{ $cast['name'] }}</a>
                                                                </div>
                                                                <p>{{ $cast['character'] }}</p>
                                                            </div>
                                                        @endif
                                                    @endforeach									
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-xs-12 col-sm-12">
                                                <br>
                                                <div class="sb-it">
                                                    <h6>Yönetmen: </h6>
                                                    <p>
                                                        @foreach ($directors as $director)
                                                            <a href="#">{{ $director['name'] }}, </a>
                                                        @endforeach
                                                    </p>
                                                </div>
                                                <div class="sb-it">
                                                    <h6>Tür:</h6>
                                                    <p><a href="#">Gizem, </a> <a href="#"> Gençlik</a></p>
                                                </div>
                                                <div class="sb-it">
                                                    <h6>Yayın Tarihi:</h6>
                                                    <p>{{ \Carbon\Carbon::parse($show['first_air_date'])->format('d M, Y') }}</p>
                                                </div>
                                                <div class="sb-it">
                                                    <h6>Kısıtlamalar:</h6>
                                                    <p>18+</p>
                                                </div>
                                                <div class="sb-it">
                                                    <h6>Anahtar Kelimeler:</h6>
                                                    <p class="tags">
                                                        <span class="time"><a href="">lise</a></span>
                                                        <span class="time"><a href="">gençlik</a></span>
                                                        <span class="time"><a href="">ergen</a></span>
                                                        <span class="time"><a href="">uyuşturucu</a></span>
                                                        <span class="time"><a href="">gizem</a></span>
                                                    </p>
                                                </div>
                                                <div class="ads">
                                                    <img src="{{ asset('/images/uploads/ads1.png') }}" alt="ad">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
