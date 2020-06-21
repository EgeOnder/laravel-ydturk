<div class="slider sliderv2">
    <div class="container">
        <div class="row">
            <div class="slider-single-item">
                @foreach ($popularShows as $show)
                    <div class="movie-item">
                        <div class="row">
                            <div class="col-md-8 col-sm-12 col-xs-12">
                                <div class="title-in">
                                    <h1>
                                        <a href="#" class="row">
                                            {{ $show['name'] }}<br>
                                            <span>{{ \Carbon\Carbon::parse($show['first_air_date'])->format('d M, Y') }}</span>
                                        </a>
                                    </h1>
                                    <div class="social-btn">
                                        <a href="https://www.youtube.com/embed/0GzqnOEVpuo" class="parent-btn fancybox-media"><i class="ion-play"></i> Fragmanı İzle</a>
                                        <a href="" class="parent-btn"><i class="ion-heart"></i> Favorilere Ekle</a>
                                    </div>
                                    <div class="mv-details">
                                        <p><i class="ion-android-star"></i><span>{{ $show['vote_average'] }}</span> /10</p>
                                        <ul class="mv-infor">
                                            <li>  Kısıtlama: 18+  </li>
                                            <li>  Yayın Tarihi: 13 Mart 2020</li>
                                        </ul>
                                    </div>
                                    <div class="btn-transform transform-vertical">
                                        <div><a href="#" class="item item-1 redbtn">izle</a></div>
                                        <div><a href= "#" class="item item-2 redbtn hvrbtn">izle</a></div>
                                    </div>		
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <div class="mv-img-2">
                                    <a href="#"><img src="{{ 'https://image.tmdb.org/t/p/w500/' . $show['poster_path'] }}" alt="poster"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>