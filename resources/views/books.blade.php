@extends('templates.base')
@section('pageName') Книги, які ми рекомендуємо прочитати @endsection

@section('main')
<article class="book-article good-page">
    <div class="introductory-text index-gradient">
        <div class="wrapper">
            <h2>Книги</h2>
            <p>Книги для саморозвитку — це один із кращих способів пізнання та розкриття себе як особистості.
                Така література насамперед розширює світогляд, адже ви буквально пірнаєте з головою у думки та
                життєвий досвід іншої людини.</p>
            <p>Звісно, мотиваційні книги не слід сприймати як ключ до вирішення всіх проблем, так само як
                антидепресанти не слід сприймати як таблетки вічного щастя.Але при грамотному підході до двох
                вищезгаданих речей — ви зможете перетворити їх у потужну силу для покращення свого фізичного та
                психологічного стану.</p>
        </div>
    </div>
</article>
<article class="main_article">
    <div class="title-main wrapper">
        <h3>All goods</h3>
    </div>
    <div class="goods-conteiner wrapper">
        <figure class="good">
            <a href="#" class="a-href"></a>
            <span class="good-img">
                        <img src="media/photos/photo_7.jpg" alt="#">
                    </span>
            <figcaption>
                <p class="good-title">Магія саітанку. Як перша година дня визначає ваш успіх</p>
                <p>Гел Елрод</p>
            </figcaption>
        </figure>
        <figure class="good">
            <a href="#" class="a-href"></a>
            <span class="good-img">
                        <img src="media/photos/photo_0.jpg" alt="#">
                    </span>
            <figcaption>
                <p class="good-title">7 звичок надзвичайно ефективних людей</p>
                <p>Стівен Кові</p>
            </figcaption>
        </figure>
        <figure class="good">
            <a href="#" class="a-href"></a>
            <span class="good-img">
                        <img src="media/photos/photo_3.jpg" alt="#">
                    </span>
            <figcaption>
                <p class="good-title">На межі. Тиждень без жалості до себе</p>
                <p>Ерік Бертран Ларссен</p>
            </figcaption>
        </figure>
        <figure class="good">
            <a href="#" class="a-href"></a>
            <span class="good-img">
                        <img src="media/photos/photo_4.jpg" alt="#">
                    </span>
            <figcaption>
                <p class="good-title">Думай і багатій</p>
                <p>Наполеон Гілл</p>
            </figcaption>
        </figure>
        <figure class="good">
            <a href="#" class="a-href"></a>
            <span class="good-img">
                        <img src="media/photos/photo_5.jpg" alt="#">
                    </span>
            <figcaption>
                <p class="good-title">Сама багата людина у Вавилоні</p>
                <p>Джорж Семюель Клейсон</p>
            </figcaption>
        </figure>
        <figure class="good">
            <a href="#" class="a-href"></a>
            <span class="good-img">
                        <img src="media/photos/photo_6.jpg" alt="#">
                    </span>
            <figcaption>
                <p class="good-title">Чоловіки з Марса, жінки з Венери</p>
                <p>Джон Грей</p>
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


<script>
    // functions for get info and path books site
    async function GetAllBooks() {
        return await eel.bookstore()();
    }

    async function GetPathPhoto() {
        return await eel.path_photos_books()();
    }

    (async function Books(){
        var books = await GetAllBooks();
        console.log(books["name_book"]);
    })(); //тут пишете скріпт який буде вставляти інфу

    (async function PathBooks(){
        var paths = await GetPathPhoto();
        console.log(paths["path"]);
    })(); //тут пишете скріпт який буде вставляти інфу
</script>
@endsection
