@extends('layouts.app')

@section('title', '自己紹介')

@section('content')
    <div class="text-center">
        <h2>🌸 自己紹介 🌸</h2>
        <img src="{{ asset('images/S__5177381.jpg') }}" alt="イラスト">
    </div>

    <div class="mt-4">
        <p><strong>名前：</strong>灰野　翔</p>
        <p><strong>性格：</strong>素直でまっすぐ、明るくてポジティブ</p>
        <p><strong>趣味：</strong>漫画・イラスト・ブレイクダンス・Web制作</p>
        <p><strong>これまで：</strong><br>
           学生時代からモスバーガーでアルバイトしながら漫画家を目指し、<br>
           現在はWebエンジニアになるためにLaravelの勉強中！</p>
        <p><strong>好きな言葉：</strong>「できるかじゃなくて、やるかどうか」</p>
    </div>
@endsection