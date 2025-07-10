@extends('layouts.app')

@section('title', '連絡先')

@section('content')
    <div class="text-center mb-4">
        <h2>💌 お問い合わせ</h2>
        <p>ご質問・感想・お仕事のご相談など、お気軽にご連絡ください！</p>
    </div>

    <div class="contact-info text-center" style="font-size: 1.2rem;">
        <p><strong>📧 メール：</strong></p>
        <p>
            <a href="mailto:hainosyo@gmail.com" style="font-size: 1.3rem; color: #c77dff; text-decoration: none;">
                hainosyo@gmail.com
            </a>
        </p>

        <p class="mt-4"><strong>🐦 X（旧Twitter）：</strong></p>
        <p>
            <a href="https://twitter.com/teritama100" target="_blank" style="color: #1da1f2; font-weight: bold;">
                @teritama100
            </a>
        </p>

        <p class="mt-4">お返事には1〜3日ほどいただく場合があります。<br>
        あらかじめご了承ください 🙇‍♀️</p>
    </div>

    <style>
        .contact-info p {
            margin-bottom: 10px;
        }
    </style>
@endsection