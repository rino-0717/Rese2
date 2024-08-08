@extends('layouts.header')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endsection

@section('content')
        <h1>{{ $user->name }}さん</h1>

        <section class="reservations">
            <h2>予約状況</h2>
            <!-- ここに予約情報のループを追加 -->
            <div class="reservation-card">
                <h3>予約1</h3>
                <button class="close-btn">×</button>
                <dl>
                    <dt>Shop</dt>
                    <dd>仙人</dd>
                    <dt>Date</dt>
                    <dd>2021-04-01</dd>
                    <dt>Time</dt>
                    <dd>17:00</dd>
                    <dt>Number</dt>
                    <dd>1人</dd>
                </dl>
            </div>
        </section>

        <section class="favorite-shops">
            <h2>お気に入り店舗</h2>
            <div class="shop-cards">
                <!-- ここにお気に入り店舗のループを追加 -->
                <div class="shop-card">
                    <img src="{{ asset('images/sushi-shop.jpg') }}" alt="仙人">
                    <h3>仙人</h3>
                    <p>#東京都 #寿司</p>
                    <button class="details-btn">詳しくみる</button>
                    <button class="favorite-btn">♥</button>
                </div>
                <div class="shop-card">
                    <img src="{{ asset('images/yakiniku-shop.jpg') }}" alt="牛助">
                    <h3>牛助</h3>
                    <p>#大阪府 #焼肉</p>
                    <button class="details-btn">詳しくみる</button>
                    <button class="favorite-btn">♥</button>
                </div>
            </div>
        </section>
@endsection
