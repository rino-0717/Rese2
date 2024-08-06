@extends('layouts.header')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/done.css') }}">
@endsection

@section('content')
    <div class="container">
        <h2>ご予約ありがとうございます</h2>
        <form action="{{ route('shop') }}">
                <div class="button-container">
                    <button type="submit">戻る</button>
                </div>
            </form>
    </div>
@endsection