<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') | Sho Haino</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&family=Poppins:wght@600&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Noto Sans JP', sans-serif;
            background-color: #f8f9fa;
            color: #333;
            margin: 0;
        }

        header {
            background: url("{{ asset('images/イラスト7.jpg') }}") no-repeat center center / cover;
            color: #fff;
            padding: 80px 20px;
            position: relative;
            z-index: 1;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }

        header::before {
            content: '';
            position: absolute;
            top: 0; left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
            z-index: 0;
        }

        header * {
            position: relative;
            z-index: 1;
        }

        .logo h1 {
            font-family: 'Poppins', sans-serif;
            font-size: 2.8rem;
            font-weight: 700;
            color: #fff;
            margin-bottom: 0;
        }

        nav a {
            color: #ffffffdd;
            margin: 0 12px;
            font-weight: 600;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: #ffc107;
        }

        header img {
            border: 3px solid #fff;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            border-radius: 50%;
            max-width: 200px;
        }

        main {
            padding: 60px 20px;
        }

        footer {
            background-color: #001f3f;
            color: #ccc;
            text-align: center;
            padding: 15px;
            font-size: 0.9rem;
            margin-top: 60px;
        }
    </style>
</head>
<body>

<header class="d-flex justify-content-between align-items-center px-4 py-4" data-aos="fade-down">
    <div class="logo">
        <h1>Haino Syo</h1>
    </div>
    <nav>
        <a href="/">HOME</a>
        <a href="/about">自己紹介</a>
        <a href="/works">作品</a>
        <a href="/timeline">年表</a>
        <a href="/vision">これから</a>
        <a href="/contact">連絡先</a>
    </nav>
    <img src="{{ asset('images/IMG_9583.JPG') }}" alt="プロフィール画像">
</header>

<main class="container">
    @yield('content')
</main>

<footer>
    &copy; {{ date('Y') }} Sho Hayano. All rights reserved.
</footer>

<!-- AOS & Bootstrap JS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

</body>
</html>