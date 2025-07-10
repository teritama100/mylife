@extends('layouts.app')

@section('title', '作品紹介')

@section('content')
    <div class="text-center mb-4">
        <h2>🎨 作品紹介 🎨</h2>
        <p>これまで描いたイラストや漫画の一部をご紹介します！</p>
    </div>

    <div class="row">
        <!-- 1枚目 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">強さとは</h5>
                    <p class="card-text">才能のあって凡人の気持ちがわからないヒーローと、強くなってヒーローになりたかった親友の葛藤バトル漫画</p>
                 <iframe src="{{ asset('pdfs/コミック5.pdf') }}" width="100%" height="600px" style="border: 1px solid #ccc;"></iframe>
                </div>
            </div>
        </div>

        <!-- 2枚目 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">地球を守れ！</h5>
                    <p class="card-text">魔界の修行でめちゃくちゃ強くなった少年と地球外生命体のガチンコバトル漫画</p>
                 <iframe src="{{ asset('pdfs/こみｃ.pdf') }}" width="100%" height="600px" style="border: 1px solid #ccc;"></iframe>
                </div>
            </div>
        </div>

        <!-- 3枚目 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">ひらめけ正義！</h5>
                    <p class="card-text">あほな少年が機転を利かせて世界をなんとか救うドタバタコメディ漫画</p>
                 <iframe src="{{ asset('pdfs/ををを.pdf') }}" width="100%" height="600px" style="border: 1px solid #ccc;"></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection