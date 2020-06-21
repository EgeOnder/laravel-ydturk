@extends('inc.header')
    
@section('content')
    
    @include('inc.navbar')

    <div class="hero common-hero">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="hero-ct">
                        <h1> Diziler</h1>
                        <ul class="breadcumb">
                            <li class="active"><a href="{{ route('index') }}">Ana Sayfa</a></li>
                            <li> <span class="ion-ios-arrow-right"></span> Diziler</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-single">
        <div class="container">
            <div class="row ipad-width">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="topbar-filter">
                        <p>Toplamda <span>x dizi</span> bulundu</p>
                    </div>
                    <div class="flex-wrap-movielist">
                            <div class="movie-item-style-2 movie-item-style-1">
                                <a href="#"><img src="{{ asset('/images/elite/poster1.png') }}" alt="" style="height: 260px; width: 170px;"></a>
                                <div class="hvr-inner">
                                    <a  href="#"> İzle <i class="ion-android-arrow-dropright"></i> </a>
                                </div>
                                <div class="mv-item-infor">
                                    <h6><a href="#">Elite</a></h6>
                                    <p class="rate"><i class="ion-android-star"></i><span>7.6</span> /10</p>
                                </div>
                            </div>
                    </div>
                    <div class="topbar-filter">
                        <label>Sayfa</label>
                        
                        <div class="pagination2">
                            <span> 1/1</span>
                            <a class="active" href="#">1</a>
                            <a href="#"><i class="ion-arrow-right-b"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="sidebar">
                        <div class="searh-form">
                            <h4 class="sb-title">Aradığın diziyi bul</h4>
                            <form class="form-style-1" action="#">
                                <div class="row">
                                    <div class="col-md-12 form-it">
                                        <label>Dizi Adı</label>
                                        <input type="text" placeholder="Dizi">
                                    </div>
                                    <div class="col-md-12 form-it">
                                        <label>Tür</label>
                                        <div class="group-ip">
                                            <select
                                                name="skills" multiple="" class="ui fluid dropdown">
                                                <option value="">Tür</option>
                                                <option value="Action1">Aksiyon</option>
                                                <option value="Action2">Bilim Kurgu</option>
                                                <option value="Action3">Drama</option>
                                                <option value="Action4">Gençlik</option>
                                                <option value="Action5">Gizem</option>
                                            </select>
                                        </div>	
                                    </div>
                                    <div class="col-md-12 form-it">
                                        <label>Kısıtlamalar</label>
                                        <div class="group-ip">
                                            <select
                                                name="skills" multiple="" class="ui fluid dropdown">
                                                <option value="">-- Yok --</option>
                                                <option value="Action1">7+</option>
                                                <option value="Action2">13+</option>
                                                <option value="Action3">16+</option>
                                                <option value="Action4">18+</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12 ">
                                        <input class="submit" type="submit" value="ara">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="ads">
                            <img src="{{ asset('/images/uploads/ads1.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('inc.footer')

@endsection