@extends('inc.header')

@section('content')

    <div class="page-single-2">
        <div class="container">
            <div class="row">
                <div class="middle-content">
                    <a href="{{ route('index') }}"><img class="md-logo" src="{{ asset('/images/logo1.png') }}" alt=""></a>
                    <img src="{{ asset('/images/uploads/err-img.png') }}" alt="">
                    <h1>{{ $quote }}</h1>
                    <a href="{{ route('index') }}" class="redbtn">ana sayfaya dön</a>
                </div>
            </div>
        </div>
    </div>
    
@endsection