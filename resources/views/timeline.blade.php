@extends('layouts.app')

@section('title', '年表')

@section('content')
    <div class="text-center mb-4">
        <h2 class="mb-3">📅 私の歩み（年表）</h2>
        <p class="text-muted">これまでの人生を、時系列で簡単にまとめてみました。</p>

        <!-- 年代ジャンプボタン -->
        <div class="btn-group flex-wrap mt-4" role="group" aria-label="年ジャンプ">
            @foreach (['1998', '2004', '2011', '2014', '2017', '2021', '2024'] as $year)
                <a href="#y{{ $year }}" class="btn btn-outline-primary btn-sm m-1">
                    {{ $year }}年
                </a>
            @endforeach
        </div>
    </div>

    <div class="timeline-container mx-auto px-3" style="max-width: 700px;">
        <ul class="timeline list-unstyled">
            <li id="y1998" class="mb-5">
                <div class="year">1998年</div>
                <div class="desc">灰野翔　誕生</div>
            </li>
            <li id="y2002" class="mb-5">
                <div class="year">2002年</div>
                <div class="desc">おおくぼ幼稚園入園</div>
                <p>幼少期から好奇心旺盛で、園内の行事には説教的に参加していました。</p>
                <p>このころから製作意欲が高く、ポケモンの模写をしたり、コマ作りやチャンバラで遊ぶ棒を新聞紙で作成したりものづくりには意欲的でした。</p>
            </li>
            <li id="y2004" class="mb-5">
                <div class="year">2004年</div>
                <div class="desc">守口市立東小学校入学</div>
                <p>小学校入学後は人を選ばず様々な友達と遊んだり、困っている人、一人ぼっちの子に対しても積極的に声をかけたりして当時からみんなで仲良くしたい性格でした。</p>
                <p>小学校では運動があまり得意ではなかったため、友達と絵を描いたり、作品を作ったりして誰かに評価してもらえるのに生きがいを感じていました。</p>
                <p>小学4年生の時にずっと一緒に絵や漫画を描いていた友達を家庭内心中事件で失ってしまいました。
                    当時１０歳だった私はそれ以来、その子の分まで生きて一緒に書いてきた漫画、絵で有名になることが目標になりました。</p>
            </li>
<li id="y2011" class="mb-5">
    <div class="year">2011年</div>
    <div class="desc">守口市立大久保中学校入学</div>
    <p>中学では <strong>バレーボール部</strong> に入部。運動が得意ではありませんでしたが、<strong>誰よりも早くボールを拾いに行く</strong>姿勢が評価されました。</p>

    <p>また、<strong>生徒会執行部・風紀委員長</strong>も務め、「みんなに元気を届けたい」という思いで活動しました。</p>

    <p>ある日、いじめられている同級生を助けようとした際、うまく言葉にできず<br>
    「楽しそうやん、そんなんするんやったら俺いじめてや」<br>
    と伝えてしまい、そこから <strong>自分が標的</strong>になり、暴力・ストーカー・いじめを受ける日々が始まりました。</p>

    <p>それでも支えてくれた <strong>家族や友人の存在</strong>に救われ、「一人じゃない」と感じながら耐え抜きました。</p>

    <p>部活の最後、引退試合で <strong>ピンチサーバーとして初出場</strong>。試合は自分のサーブミスで敗退しましたが、それも今では <span style="color: gray;">「笑い話」</span>です。</p>

    <p>卒業後は、漫画家の夢に向けて本格的に原稿制作を開始し、<strong>北かわち皐ケ丘高校</strong>に合格しました。</p>
</li>
            </li>
            <li id="y2014" class="mb-5">
                <div class="year">2014年</div>
                <div class="desc">高校入学後、出版社に漫画の持ち込みをしながらモスバーガーでアルバイトを開始。</div>
            </li>
            <li id="y2017" class="mb-5">
                <div class="year">2017年</div>
                <div class="desc">大学に入学後も、漫画家を目指して作品制作に励む。持ち込みにも挑戦！</div>
            </li>
            <li id="y2021" class="mb-5">
                <div class="year">2021年</div>
                <div class="desc">卒業後も就職よりも漫画家の道を決意。ゆくゆくはIT業界に興味を持ち、Laravelの勉強を開始。</div>
            </li>
            <li id="y2024" class="mb-5">
                <div class="year">2024年</div>
                <div class="desc">Webエンジニアを目指して転職活動中！</div>
            </li>
        </ul>
    </div>

<style>
    html {
        scroll-behavior: smooth;
    }

    .timeline .year {
        font-size: 1.3rem;
        font-weight: bold;
        color: #7b2cbf;
        margin-bottom: 5px;
    }

    .timeline .desc {
        font-size: 1.05rem;
        color: #333;
        margin-left: 12px;
        line-height: 1.8;
    }

    .timeline p {
        margin-left: 14px;
        line-height: 1.75;
    }

    .btn-outline-primary {
        border-color: #c77dff;
        color: #6a00f4;
        font-weight: 600;
    }

    .btn-outline-primary:hover {
        background-color: #c77dff;
        color: #fff;
    }

    @media (max-width: 576px) {
        .timeline .year {
            font-size: 1.1rem;
        }

        .timeline .desc, .timeline p {
            font-size: 0.95rem;
            margin-left: 8px;
        }

        .btn-group a {
            font-size: 0.8rem;
            padding: 6px 8px;
        }
    }
</style>
@endsection