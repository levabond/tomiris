@extends('app')
@section('title','Главная страница')


@section('content')
    <section class="firstscreen" data-type="background" data-speed="10">
        <div class="bg_black">
            <div class="container">
                <img src="images/logo.png" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt soluta non voluptatem. Numquam et voluptatem aperiam animi, in exercitationem nam, provident mollitia consectetur, doloribus, deserunt quo? Porro incidunt tempore quae qui perspiciatis, facilis ipsa libero totam reprehenderit, enim assumenda. Est?</p>
            </div>
        </div>
    </section>

    <section class="brow">
        <div class="container">
            <img class="title_img" src="images/servis.png" alt="">
            <img src="images/lojka.png" class="lojka" alt="">
            <div class="block">
                <article class="blocks">
                    <div class="top_block">
                        <img class="blocks__img" src="images/tray.svg" alt="">
                        <h4>Ресторан</h4>
                    </div>
                    <div class="sub_block">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, hic.</p>
                    </div>
                </article>
                <article class="blocks">
                    <div class="top_block">
                        <img class="blocks__img" src="images/hookah.svg" alt="">
                        <h4>кальян</h4>
                    </div>
                    <div class="sub_block">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, hic.</p>
                    </div>
                </article>
                <article class="blocks">
                    <div class="top_block">
                        <img class="blocks__img" src="images/bed.svg" alt="">
                        <h4>гостиница</h4>
                    </div>
                    <div class="sub_block">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, hic.</p>
                    </div>
                </article>
                <article class="blocks">
                    <div class="top_block">
                        <img height="110px" style="    margin-top: 7px;margin-bottom: 10px;" class="blocks__img" src="images/bath.svg" alt="">
                        <h4>сауна</h4>
                    </div>
                    <div class="sub_block">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, hic.</p>
                    </div>
                </article>
            </div>
            <img src="images/vilka.png" class="vilka" alt="">
        </div>
    </section>
    <section class="news">
        <div class="container news_container">
            <h2 class="news_block">
                Последние новости.
            </h2>

            <section class="box_news">
                @foreach($news as $item)
                    <article class="block_news">
                        <span class="news_date">{{$item->date}}</span>
                        <h4 class="title_news">{{$item->title}}</h4>
                        <p class="content_news">{{$item->preview_text}}</p>
                        <button class="btn news_more" data-toggle="modal" data-target="#modal-{{$item->id}}" >Подробнее</button>
                        <div class="modal fade" id="modal-{{$item->id}}">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <div style="background: url({{$item->img_src}}});"></div>
                                        <button class="close" type="button" data-dismiss="modal">X</button>
                                    </div>
                                    <div class="modal-body">
                                        <p>{{mb_substr($item->preview_text,0,200)}}</p>
                                        <p>{{mb_substr($item->detail_text,0,200)}}</p>
                                    </div>
                                    <div class="modal-footer">
                                        <span>{{$item->date}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>

                @endforeach
            </section>

        </div>
        <section class="clear"></section>

    </section>
    <section class="interier">
        <div class="container">
            <h1>Наш интерьер</h1>
            <ul id="carousel" class="owl-carousel carousel">
                <li><img src="/images/ARML8905.jpg" width="300" height="200" alt="Owl_1" /></li>
                <li><img src="/images/ARML8920.jpg" width="300" height="200" alt="Owl_2" /></li>
                <li><img src="/images/ARML8935.jpg" width="300" height="200" alt="Owl_3" /></li>
                <li><img src="/images/ARML8937.jpg" width="300" height="200" alt="Owl_4" /></li>
                <li><img src="/images/ARML8966.jpg" width="300" height="200" alt="Owl_5" /></li>
                <li><img src="/images/ARML8815.jpg" width="300" height="200" alt="Owl_6" /></li>
                <li><img src="/images/ARML8935.jpg" width="300" height="200" alt="Owl_7" /></li>
                <li><img src="/images/ARML8937.jpg" width="300" height="200" alt="Owl_8" /></li>
            </ul>
        </div>
    </section>
    <section class="news">
        <div class="container news_container">
            <h2 class="news_block">
                Наши партнеры
            </h2>

            <section class="box_news">
                <ul id="carousel-2" class="owl-carousel carousel">
                    <li><img src="/images/ARML8905.jpg" width="300" height="200" alt="Owl_1" /></li>
                    <li><img src="/images/ARML8920.jpg" width="300" height="200" alt="Owl_2" /></li>
                    <li><img src="/images/ARML8935.jpg" width="300" height="200" alt="Owl_3" /></li>
                    <li><img src="/images/ARML8937.jpg" width="300" height="200" alt="Owl_4" /></li>
                    <li><img src="/images/ARML8966.jpg" width="300" height="200" alt="Owl_5" /></li>
                    <li><img src="/images/ARML8815.jpg" width="300" height="200" alt="Owl_6" /></li>
                    <li><img src="/images/ARML8935.jpg" width="300" height="200" alt="Owl_7" /></li>
                    <li><img src="/images/ARML8937.jpg" width="300" height="200" alt="Owl_8" /></li>
                </ul>
            </section>

        </div>
        <section class="clear"></section>

    </section>
@endsection