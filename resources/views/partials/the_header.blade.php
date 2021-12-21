@php
$navbarItems = [
    [
        "title" => "Characters",
        "href" => "characters.index",
    ],
    [
        "title" => "Comics",
        "href" => "comics.index",
    ],
    [
        "title" => "Movies",
        "href" => "movies.index",
    ],
    [
        "title" => "TV",
        "href" => "tv.index",
    ],
    [
        "title" => "Games",
        "href" => "games.index",
    ],
    [
        "title" => "Collectibles",
        "href" => "collectibles.index",
    ],
    [
        "title" => "Videos",
        "href" => "videos.index",
    ],
    [
        "title" => "Fans",
        "href" => "fans.index",
    ],
    [
        "title" => "News",
        "href" => "news.index",
    ],
    [
        "title" => "Shop",
        "href" => "shop.index",
    ],
]
@endphp

<header class="container">
    <div class="logo">
        <img src="{{ asset('img/dc-logo.png') }}" alt="">
    </div>
    <div class="menu">
        <ul>
            @foreach ($navbarItems as $item)     
            <li>
                <a class="nav-link" href="{{ route($item['href']) }}">{{ $item['title'] }}</a>
            </li>
            @endforeach
        </ul>
    </div>
</header>


