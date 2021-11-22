@extends('templates.base')
@section('pageName') Відео про спорт, які ми рекомендуємо @endsection

@section('main')
    <article class="sport-article good-page">
        <div class="introductory-text index-gradient">
            <div class="wrapper">
                <h2>Спорт</h2>
                <p>Спорт- це здоров'я.Здоровий спосіб життя,правильне і збалансоване харчування,нормальний сон-все
                    це сприяє зміцненню здоров'я,але цього недостатньо.</p>
                <p>Щоб стати по-справньому гармонійною людиною потрібно обов'язково займатися спортом!</p>
                <p>Спорт є ефективним засобом фізичного виховання, його цінність визначається стимулюючим впливом на
                    поширення фізичної культури серед різних верств населення, і в цьому плані спорт має міжнародне
                    значення.</p>
            </div>
        </div>
    </article>
    <article class="main_article">
        <div class="title-main wrapper">
            <h3>All goods</h3>
        </div>
        <div class="goods-conteiner wrapper">
            <figure class="good">
                    <span class="good-img">
                        <iframe src="https://www.youtube.com/embed/v2ruAhNGiUE" title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </span>
                <figcaption>
                    <p class="good-title"></p>
                    <p>СУПЕР ПРЕС ЗА 7 ХВИЛИН</p>
                </figcaption>
            </figure>
            <figure class="good">
                    <span class="good-img">
                        <iframe src="https://www.youtube.com/embed/aSEjHhMY4EQ" title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </span>
                <figcaption>
                    <p class="good-title"></p>
                    <p>Ідеальний Прес за 14 Днів </p>
                </figcaption>
            </figure>
            <figure class="good">
                    <span class="good-img">
                        <iframe src="https://www.youtube.com/embed/NtjWttb8Bf8" title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </span>
                <figcaption>
                    <p class="good-title"></p>
                    <p>Як навчитись підтягуватись?</p>
                </figcaption>
            </figure>
            <figure class="good">
                    <span class="good-img">
                        <iframe src="https://www.youtube.com/embed/bTf0Woh3S5Y" title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </span>
                <figcaption>
                    <p class="good-title"></p>
                    <p>Не Вмієш Віджиматися? Просто Подивись Це!</p>
                </figcaption>
            </figure>
            <figure class="good">
                    <span class="good-img">
                        <iframe src="https://www.youtube.com/embed/rTA_aRCfD0M" title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </span>
                <figcaption>
                    <p class="good-title"></p>
                    <p>ПРОКАЧАЙ ГРУДНУ КЛІТИНУ ЗА 6 ХВИЛИН</p>
                </figcaption>
            </figure>
            <figure class="good">
                    <span class="good-img">
                        <iframe src="https://www.youtube.com/embed/3WKvjYmFLOU" title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </span>
                <figcaption>
                    <p class="good-title"></p>
                    <p>НАКАЧАТИ ПОПУ ДОМА ЗА 5 ХВИЛИН</p>
                </figcaption>
            </figure>
        </div>
    </article>
    </main>
    <div class="scrollBox">
        <a href="#" class="upscroll bg-a-top">
            <svg class="top-arrow" width='22' height='22' viewBox='0 0 22 22'>
                <polyline points='0 0 10 10 20 0' fill='none' stroke='black' stroke-width='3'></polyline>
                <polyline points='0 10 10 20 20 10' fill='none' stroke='black' stroke-width='3'></polyline>
            </svg>
        </a>
    </div>
@endsection
