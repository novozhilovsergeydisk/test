<!doctype html>
<html id="html" lang="ru" class="a">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ТСН СНТ Загорье</title>

    <link rel="icon" href="https://go-tailwind.preview.uideck.com/favicon.ico">

    <link href="/css/main.css" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/up.js'])

</head>

<body class="zj">

<header id="navbar" class="header d x q hc header">
    <div class="hb hc md sf xn yn mo xp 2xl:ud-px-20">
        <div class="e ga kc un wp">
            <a href="/" class="gb text-white">
                <span class="logo-text">ТСН СНТ Загорье</span>
            </a>
        </div>

        <x-menu/>

        <x-toggler/>
    </div>
</header>

<section id="home" class="mb-3 e da _d bh pb-3 to"> <!-- class: gl -->
    <div class="rf xi">
        <div class="ja hb md od">
            <div class="hc qf un">
                {{ $slot }}
            </div>
        </div>
    </div>
</section>

<footer class="wow fadeInUp" data-wow-delay=".2s">
    <x-footer/>
</footer>

<x-up/>

<x-main-script/>

</body>
</html>



