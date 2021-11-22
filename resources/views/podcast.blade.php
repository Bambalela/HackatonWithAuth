@extends('templates.base')
@section('pageName') Подкасти, які ми рекомендуємо @endsection

@section('main')
    <article class="podcast-article good-page">
        <div class="introductory-text index-gradient">
            <div class="wrapper">
                <h2>Подкасти</h2>
                <p>Це збірка серійних аудіофайлів в основному на одну тему або з однією метою. Подкасти можуть бути
                    як розважальні, так і наукові або просто новини. Це річ, яка є на кожному телефоні, і вони 100%
                    безкоштовні.</p>
                <p>Подкаст безкоштовно завантажує нові епізоди, і вам не потрібен інтернет, щоб їх слухати. Також ви
                    можете йти на роботу чи їхати в машині, чи навіть працювати та слухати подкасти. На відміну від
                    YouTube, вам не потрібно увесь час сидіти біля монітора і щось дивитися.</p>
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
                        <img src="media/audio/Skala.jfif" alt="#">
                    </span>
                <audio src="media/audio/audio_0.mp3" controls></audio>
                <figcaption>

                    <p class="good-title">Наполегливість</p>
                    <p>Дуэйн Джонсон</p>
                </figcaption>

            </figure>
            <figure class="good">
                    <span class="good-img">
                        <img src="media/audio/rybakov.jpg" alt="#">
                    </span>
                <audio src="media/audio/audio_1.mp3" controls></audio>
                <figcaption>
                    <p class="good-title">3 найважливіші правила грошей</p>
                    <p> Ігор Рибаков</p>
                </figcaption>
            </figure>
            <figure class="good">
                    <span class="good-img">
                        <img src="media/audio/Baffet.jpg" alt="#">
                    </span>
                <audio src="media/audio/audio_2.mp3" controls></audio>
                <figcaption>
                    <p class="good-title">Поради інвесторам-початківцям</p>
                    <p>Уоренн Баффет</p>
                </figcaption>
            </figure>
            <figure class="good" onclick="playsound3()">
                    <span class="good-img">
                        <img src="media/audio/Baffet.jpg" alt="#">
                    </span>
                <audio src="media/audio/audio_3.mp3" controls></audio>
                <figcaption>
                    <p class="good-title">Знайди свою пристрасть</p>
                    <p>Уоренн Баффет</p>
                </figcaption>
            </figure>

            <figure class="good">
                    <span class="good-img">
                        <img src="media/audio/Jack_ma.jfif" alt="#">
                    </span>
                <audio src="media/audio/audio_4.mp3" controls></audio>
                <figcaption>
                    <p class="good-title">Життєві поради від мільйонера</p>
                    <p>Джек Ма</p>
                </figcaption>
            </figure>
            <figure class="good">

                    <span class="good-img">
                        <img src="media/audio/Robert.jpg" alt="#">
                    </span>
                <audio src="media/audio/audio_5.mp3" controls></audio>
                <figcaption>
                    <p class="good-title"> Як перейти від бідності до багатства</p>
                    <p>Роберт Кийосаки </p>
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
    <script type="text/javascript" src="js/index.js"></script>
    <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>

    <script>
        // functions for get info and path podcast site
        async function GetAllAudios() {
            return await eel.audiosstore()();
        }

        async function GetPathAudios() {
            return await eel.path_audios()();
        }

        (async function Audios(){
            let audios = await GetAllAudios();
            console.log(audios); //тут пишете скріпт який буде вставляти інфу
        })();

        (async function PathAudios(){
            let paths = await GetPathAudios();
            console.log(paths); //тут пишете скріпт який буде вставляти інфу
        })();
    </script>
@endsection
