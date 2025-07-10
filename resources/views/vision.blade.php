@extends('layouts.app')

@section('title', 'これから')

@section('content')
    <div class="text-center mb-4">
        <h2>🌈 これからの夢・目標</h2>
        <p>これから実現していきたいことをまとめてみました。</p>
    </div>

    <div class="vision-content" style="max-width: 700px; margin: auto;">
        <ul class="list-group mb-4">
            <li class="list-group-item">🌟 Webエンジニアとして人の役に立つシステムを作る</li>
            <li class="list-group-item">🎨 漫画やイラストを通して、自分の世界を表現し続けたい</li>
            <li class="list-group-item">💬 前向きさと愛嬌で、関わる人たちを明るくしたい</li>
            <li class="list-group-item">👪 温かい家庭を築き、子どもを育てながら創作と仕事を両立</li>
        </ul>

        <blockquote class="blockquote text-center">
            <p class="mb-0">「できるかじゃなくて、やるかどうか」</p>
            <footer class="blockquote-footer">大切にしている言葉</footer>
        </blockquote>
    </div>

    <style>
        .list-group-item {
            background-color: #fff9e6;
            border: 1px solid #f5deb3;
            font-size: 1.1rem;
        }

        .blockquote {
            margin-top: 40px;
            font-style: italic;
            color: #6c757d;
        }
    </style>
@endsection