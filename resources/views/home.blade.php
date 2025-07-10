@extends('layouts.app')

@section('title', 'ホーム')

@section('content')

    <div class="text-center mb-4">
        <h2>✨ 私について</h2>
        <div class="speech-bubble">
            「素直でまっすぐ」「努力を楽しむ」がモットーの、<br>
            元漫画家志望のWebエンジニア志望です！
        </div>
    </div>

    <div class="row align-items-center mb-5">
        <div class="col-md-6 text-center">
            <img src="{{ asset('images/S__5177381.jpg') }}" alt="プロフィール画像" class="img-fluid img-comic" style="max-width: 250px;">
        </div>
        <div class="col-md-6">
            <p>
                はじめまして、<strong>灰野 翔（はいの しょう）</strong>と申します。<br>
                漫画家を目指して10年以上作品を描き続けてきました。
            </p>
            <p>
                現在はその創造力と継続力を活かし、<strong>Webエンジニア</strong>を目指してLaravelを中心に学習しています。<br>
                これまでに学生管理システムやポートフォリオサイトを制作してきました。
            </p>
        </div>
    </div>

    <div class="mb-5 text-center">
        <h3>📚 各ページへGO！</h3>
        <div class="mt-3">
            <a href="/about" class="btn btn-outline-primary btn-comic m-2">自己紹介</a>
            <a href="/works" class="btn btn-outline-success btn-comic m-2">作品紹介</a>
            <a href="/timeline" class="btn btn-outline-warning btn-comic m-2">年表</a>
            <a href="/vision" class="btn btn-outline-info btn-comic m-2">これから</a>
            <a href="/contact" class="btn btn-outline-dark btn-comic m-2">連絡先</a>
        </div>
    </div>

    <div class="text-center text-muted">
        <p class="text-signature">「できるかじゃなくて、やるかどうか」<br>これからも挑戦を続けていきます。</p>
    </div>

@endsection

<style>
    body {
        background: #fffaf0;
        font-family: 'Comic Sans MS', 'Arial Rounded MT Bold', sans-serif;
    }

    h2, h3 {
        font-weight: bold;
        border-left: 6px solid #ff7b00;
        padding-left: 10px;
        margin-bottom: 20px;
    }

    .speech-bubble {
        position: relative;
        background: #ffe680;
        border: 3px solid #ff7b00;
        border-radius: 20px;
        padding: 20px;
        font-size: 1.2rem;
        line-height: 1.6;
        color: #333;
        margin: 20px auto;
        max-width: 700px;
    }

    .speech-bubble::after {
        content: '';
        position: absolute;
        bottom: -20px;
        left: 30px;
        width: 0;
        height: 0;
        border: 20px solid transparent;
        border-top-color: #ffe680;
        border-bottom: 0;
        margin-left: -10px;
    }

    .btn-comic {
        font-weight: bold;
        border-width: 2px;
        font-family: 'Comic Sans MS', sans-serif;
    }

    .img-comic {
        border: 4px dotted #ff7b00;
        border-radius: 50%;
        padding: 5px;
        background: #fff;
    }

    .text-signature {
        font-style: italic;
        font-size: 1.1rem;
        color: #666;
    }
</style>