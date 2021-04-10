@extends('inc.header')

@section('content')

    @include('inc.navbar')

    <div class="hero mv-single-hero" style="background: url('') !important; width: 100%;">
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
                        <img src="{{ 'https://image.tmdb.org/t/p/w500/' . $person['profile_path'] }}" alt="poster-bg">
                    </div>
                </div>
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="movie-single-ct main-content">
                        <h1 class="bd-hd">{{ $person['name'] }}</h1>
                        <div class="social-btn">
                            <a href="#" class="parent-btn"><i class="ion-heart"></i> Favorilere Ekle</a>
                        </div>
                        <div class="movie-rate">
                            <div class="rate">
                                <i class="ion-android-star"></i>
                                <p><span>{{ round($person['popularity'] * .5) }}</span><br></p>
                            </div>
                            <div class="rate-star">
                                <p>Popülerlik Puanı:  </p>
                                @if (($person['popularity'] * .5) >= 1)
                                    <i class="ion-ios-star"></i>
                                @else
                                    <i class="ion-ios-star-outline"></i>
                                @endif
                                @if (($person['popularity'] * .5) >= 2)
                                    <i class="ion-ios-star"></i>
                                @else
                                    <i class="ion-ios-star-outline"></i>
                                @endif
                                @if (($person['popularity'] * .5) >= 3)
                                    <i class="ion-ios-star"></i>
                                @else
                                    <i class="ion-ios-star-outline"></i>
                                @endif
                                @if (($person['popularity'] * .5) >= 4)
                                    <i class="ion-ios-star"></i>
                                @else
                                    <i class="ion-ios-star-outline"></i>
                                @endif
                                @if (($person['popularity'] * .5) >= 5)
                                    <i class="ion-ios-star"></i>
                                @else
                                    <i class="ion-ios-star-outline"></i>
                                @endif
                                @if (($person['popularity'] * .5) >= 6)
                                    <i class="ion-ios-star"></i>
                                @else
                                    <i class="ion-ios-star-outline"></i>
                                @endif
                                @if (($person['popularity'] * .5) >= 7)
                                    <i class="ion-ios-star"></i>
                                @else
                                    <i class="ion-ios-star-outline"></i>
                                @endif
                                @if (($person['popularity'] * .5) >= 8)
                                    <i class="ion-ios-star"></i>
                                @else
                                    <i class="ion-ios-star-outline"></i>
                                @endif
                                @if (($person['popularity'] * .5) >= 9)
                                    <i class="ion-ios-star"></i>
                                @else
                                    <i class="ion-ios-star-outline"></i>
                                @endif
                                @if (($person['popularity'] * .5) >= 10)
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
                                                <div class="title-hd-sm">
                                                    <h4>oyuncular</h4>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-xs-12 col-sm-12">
                                                <br>
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
