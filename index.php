<!DOCTYPE html>
<html lang="en">

<?php require '/head.php'; ?>

<body>
    <header class="shadow-sm fixed-top bg-white">
    <div class="container">

        <!-- ============= COMPONENT ============== -->
        <nav class="navbar navbar-expand-lg navbar-light rounded-0">
        <div class="container-fluid">
            <div class="good_company d-flex justify-content-start">
                <img src="img/logo/logo.svg" class="img-fluid rounded-0" alt="...">
                <p class="mt-3 ms-2 fw-bold" style="color: #127A7B;" >Оливковая ветвь</p>
            </div>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"  aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="main_nav">
                <ul class="navbar-nav m-0 m-auto">
                                        <li class="nav-item dropdown has-megamenu dropdown-hover">
                        <a class="nav-link dropdown-toggle fw-bold text-info" href="#" data-bs-toggle="dropdown"> Каталог  </a>
                        <div class="dropdown-menu megamenu border-0" role="menu">
                            <div class="row g-3">
                                <div class="col-lg-3 col-6">
                                    <div class="col-megamenu">
                                        <h6 class="title">Кухни</h6>
                                        <ul class="list-unstyled lh-lg">
                                            <li><a class="text-decoration-none text-dark" href="#">Классический стиль</a></li>
                                            <li><a class="text-decoration-none text-dark" href="#">Современный стиль</a></li>
                                            <li><a class="text-decoration-none text-dark" href="#">Хай-тек кухни</a></li>
                                            <li><a class="text-decoration-none text-dark" href="#">Кухни в стиле модерн</a></li>
                                            <li><a class="text-decoration-none text-dark" href="#">Скандинавский стиль</a></li>
                                            <li><a class="text-decoration-none text-dark" href="#">Классический стиль</a></li>
                                            <li><a class="text-decoration-none text-dark" href="#">Современный стиль</a></li>
                                            <li><a class="text-decoration-none text-dark" href="#">Хай-тек кухни</a></li>
                                            <li><a class="text-decoration-none text-dark" href="#">Кухни в стиле модерн</a></li>
                                            <li><a class="text-decoration-none text-dark" href="#">Скандинавский стиль</a></li>
                                        </ul>
                                    </div>  <!-- col-megamenu.// -->
                                </div><!-- end col-3 -->
                                <div class="col-lg-3 col-6">
                                    <div class="col-megamenu">
                                        <h6 class="title">Техника</h6>
                                        <ul class="list-unstyled lh-lg">
                                            <li><a class="text-decoration-none text-dark" href="#">Мойки</a></li>
                                            <li><a class="text-decoration-none text-dark" href="#">Смесители</a></li>
                                            <li><a class="text-decoration-none text-dark" href="#">Варочные панели</a></li>
                                            <li><a class="text-decoration-none text-dark" href="#">Вытяжки</a></li>
                                            <li><a class="text-decoration-none text-dark" href="#">Посудомойки</a></li>
                                        </ul>
                                    </div>  <!-- col-megamenu.// -->
                                </div><!-- end col-3 --> 
                                <div class="col-lg-3 col-6">
                                    <div class="col-megamenu">
                                        <h6 class="title">Шкафы купе</h6>
                                        <ul class="list-unstyled lh-lg">
                                            <li><a class="text-decoration-none text-dark" href="#">Custom Menu</a></li>
                                            <li><a class="text-decoration-none text-dark" href="#">Custom Menu</a></li>
                                            <li><a class="text-decoration-none text-dark" href="#">Custom Menu</a></li>
                                            <li><a class="text-decoration-none text-dark" href="#">Custom Menu</a></li>
                                            <li><a class="text-decoration-none text-dark" href="#">Custom Menu</a></li>
                                            <li><a class="text-decoration-none text-dark" href="#">Custom Menu</a></li>
                                        </ul>
                                    </div>  <!-- col-megamenu.// -->
                                </div><!-- end col-3 -->
                            </div><!-- end row --> 
                        </div> <!-- dropdown-mega-menu.// -->
                    </li>
                    <li class="nav-item active fw-normal"> <a class="nav-link" href="#">Оплата </a> </li>
                    <li class="nav-item active fw-normal"> <a class="nav-link" href="#">Акции </a> </li>
                    <li class="nav-item active fw-normal"> <a class="nav-link" href="#">О компании </a> </li>
                    <li class="nav-item active fw-normal"> <a class="nav-link" href="#">Контакты </a> </li>
                    <li class="nav-item active fw-normal"> <a class="nav-link" href="#">Полезная информация </a> </li>
                </ul>
            </div> <!-- navbar-collapse.// -->
        </div>
        <a class="navbar-brand" href="#"><span class="fw-bold fs-5"> 8 812 317 22 42 </span>
            <br><img src="img/logo/map-pin.svg" alt="" class="p-0 m-0"><span class="fs-6">Санкт Петербург</span></a> <!-- container-fluid.// -->
        </nav>

    </div>
</header>

<!--end menu-->
<!--start main-->
    <main class="main__slider" style="margin-bottom: 5%;">
        <div class="container" style="margin-top: 150px;">
            <div class="row">
                <div class="col-sm-6 mt-5">
                    <div class="h1__slider__menu">
                        <h1>
                            Кухни на заказ <br>
                                                                        от производителя
                        </h1>
                        <p class="mt-3">
                            Соберите кухню с индивидуальным <br>
                                                                        дизайном на конструкторе и узнайте
                                                                        ее стоимость
                        </p>
                        <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-danger b-0 rounded-0 mt-3" style="width: 200px; height: 60px;">Конструктор</button>
                    </div>
                </div>
                <div class="col-sm-6 mt-5">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/slider/slider-1.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/slider/slider-1.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/slider/slider-1.png" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-next border border-4 border-white position-absolute bottom-0 start-0 ms-5" style="background-color:#1A8AAD;" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                    <span class="visually-hidden">Next</span>
                                                                </button>
                        <button class="carousel-control-prev border border-4 border-white position-absolute bottom-0 start-0" style="background-color:#BABABA;" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                    <span class="visually-hidden">Previous</span>
                                                                </button>
                    </div>
                </div>
            </div>
    </main>
    <main class="popular__slider bg-light mb-5">
        <div class="container">
            <div class="row mb-5">
                <h1 class="mt-5 center__h1__popular">
                    Популярные товары
                </h1>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper mb-5">
                        <div class="swiper-slide mb-5">
                            <div class="card b-0 rounded-0">
                                <!--Карточка с акцией-->
                                <p class="m-0 p-2 position-absolute top-0 start-0 text-white b-0"
                                    style="background-color: #07607C;">17%</p>
                                <!--Карточка с акцией-->

                                <img src="/img/card_tov/card-tovar.png" class="card-img-top p-0 b-0 rounded-0" alt="..." style="height: 14em;">
                                <div class="card-body">
                                    <h5 class="card-title">Кухня "ОК005"</h5>
                                    <p class="card-text m-0">Стиль: Классический</p>
                                    <p class="card-text m-0">Цвет: Черный</p>
                                    <p class="card-text m-0">Материал: ЛДСП</p>
                                    <a href="#"
                                        class="btn btn-primary btn-danger b-0 rounded-0 mt-3 ms-2 d-flex justify-content-center"
                                        style="padding: 1% 2% 1% 2%;">от 56 200 ₽ &#8594;</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide mb-5">
                            <div class="card b-0 rounded-0">
                                <img src="/img/card_tov/card-tovar.png" class="card-img-top p-0 b-0 rounded-0" alt="..." style="height: 14em;">
                                <div class="card-body">
                                    <h5 class="card-title">Кухня "ОК005"</h5>
                                    <p class="card-text m-0">Стиль: Классический</p>
                                    <p class="card-text m-0">Цвет: Черный</p>
                                    <p class="card-text m-0">Материал: ЛДСП</p>
                                    <a href="#"
                                        class="btn btn-primary btn-danger b-0 rounded-0 mt-3 ms-2 d-flex justify-content-center"
                                        style="padding: 1% 2% 1% 2%;">от 56 200 ₽ &#8594;</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide mb-5">
                            <div class="card b-0 rounded-0">
                                <img src="/img/card_tov/card-tovar.png" class="card-img-top p-0 b-0 rounded-0" alt="..." style="height: 14em;">
                                <div class="card-body">
                                    <h5 class="card-title">Кухня "ОК005"</h5>
                                    <p class="card-text m-0">Стиль: Классический</p>
                                    <p class="card-text m-0">Цвет: Черный</p>
                                    <p class="card-text m-0">Материал: ЛДСП</p>
                                    <a href="#"
                                        class="btn btn-primary btn-danger b-0 rounded-0 mt-3 ms-2 d-flex justify-content-center"
                                        style="padding: 1% 2% 1% 2%;">от 56 200 ₽ &#8594;</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide mb-5">
                            <div class="card b-0 rounded-0">
                                <img src="/img/card_tov/card-tovar.png" class="card-img-top p-0 b-0 rounded-0" alt="..." style="height: 14em;">
                                <div class="card-body">
                                    <h5 class="card-title">Кухня "ОК005"</h5>
                                    <p class="card-text m-0">Стиль: Классический</p>
                                    <p class="card-text m-0">Цвет: Черный</p>
                                    <p class="card-text m-0">Материал: ЛДСП</p>
                                    <a href="#"
                                        class="btn btn-primary btn-danger b-0 rounded-0 mt-3 ms-2 d-flex justify-content-center"
                                        style="padding: 1% 2% 1% 2%;">от 56 200 ₽ &#8594;</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide mb-5">
                            <div class="card b-0 rounded-0">
                                <img src="/img/card_tov/card-tovar.png" class="card-img-top p-0 b-0 rounded-0" alt="..." style="height: 14em;">
                                <div class="card-body">
                                    <h5 class="card-title">Кухня "ОК005"</h5>
                                    <p class="card-text m-0">Стиль: Классический</p>
                                    <p class="card-text m-0">Цвет: Черный</p>
                                    <p class="card-text m-0">Материал: ЛДСП</p>
                                    <a href="#"
                                        class="btn btn-primary btn-danger b-0 rounded-0 mt-3 ms-2 d-flex justify-content-center"
                                        style="padding: 1% 2% 1% 2%;">от 56 200 ₽ &#8594;</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide mb-5">
                            <div class="card b-0 rounded-0">
                                <img src="/img/card_tov/card-tovar.png" class="card-img-top p-0 b-0 rounded-0" alt="..." style="height: 14em;">
                                <div class="card-body">
                                    <h5 class="card-title">Кухня "ОК005"</h5>
                                    <p class="card-text m-0">Стиль: Классический</p>
                                    <p class="card-text m-0">Цвет: Черный</p>
                                    <p class="card-text m-0">Материал: ЛДСП</p>
                                    <a href="#"
                                        class="btn btn-primary btn-danger b-0 rounded-0 mt-3 ms-2 d-flex justify-content-center"
                                        style="padding: 1% 2% 1% 2%;">от 56 200 ₽ &#8594;</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide mb-5">
                            <div class="card b-0 rounded-0">
                                <img src="/img/card_tov/card-tovar.png" class="card-img-top p-0 b-0 rounded-0" alt="..." style="height: 14em;">
                                <div class="card-body">
                                    <h5 class="card-title">Кухня "ОК005"</h5>
                                    <p class="card-text m-0">Стиль: Классический</p>
                                    <p class="card-text m-0">Цвет: Черный</p>
                                    <p class="card-text m-0">Материал: ЛДСП</p>
                                    <a href="#"
                                        class="btn btn-primary btn-danger b-0 rounded-0 mt-3 ms-2 d-flex justify-content-center"
                                        style="padding: 1% 2% 1% 2%;">от 56 200 ₽ &#8594;</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--
                        <div class="swiper-button-next text-white border border-5 border-white" style="background-color: #1A8AAD;"></div>
                        <div class="swiper-button-prev text-white border border-5 border-white" style="background-color:#BABABA;"></div>
                        -->
                    <div
                        class="swiper-pagination swiper-pagination-bullets swiper-pagination-horizontal swiper-pagination-bullets-dynamic">
                    </div>
                </div>
            </div>
        </div>
            </div>
    </main>
    <div class="container">
        <div class="row justify-content-center" style="background-color: #1A8AAD;">
            <div class="col-md-6 mb-0" style="background-image: url(img/banner.png);background-repeat: no-repeat;">
                <h4 class="ms-4 mt-5 text-white">
                    Бесплатная <br>
                            консультация <br>
                            от дизайнера
                </h4>
                <p class="text-white ms-4">
                    Lorem ipsum dolor sit amet, <br>
                        consectetur adipiscing elit.
                </p>

            </div>

            <div class="col-md-6 p-4">
                <form class="form" id="myForm" role="form">
                    <div class="mb-3">
                        <label for="inputName" class="form-label text-white">Ваше имя</label>
                        <input type="text" class="phone-field form-control border-white border-3 rounded-0 bg-info text-white" id="inputName" name="name">
                        <div class="mb-3 mt-3">
                            <label for="number" class="form-label text-white">Номер телефона</label>
                            <input type="tel" name="phone" class="phone-field form-control phone-field border-white border-3 rounded-0 bg-info text-white" id="exampleInputTel" data-rule-required="true" data-rule-minlength="10" >
                        </div>
                        
                        <button type="submit" class="btn btn-primary border-white rounded-0 text-white border-0 p-2" style="background-color:#07607C;">Оставить заявку</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <h1 class="mt-5 center__h1__popular">Каталог</h1>
            <div class="d-flex flex-row bd-highlight mb-4 catalog__button">
                <button type="button" class="btn border border-info m-1 border-3 rounded-0 text-info">Кухни</button>
                <button type="button" class="btn border border-light m-1 border-3 rounded-0">Техника</button>
                <button type="button" class="btn border border-light m-1 border-3 rounded-0">Шкафы купе</button>
            </div>

            <div class="swiper mySwiper mb-5">
                <div class="swiper-wrapper p-0 m-0">
                    <div class="swiper-slide">
                        <div class="card border-0 rounded-0 mb-5" style="height: 18em;">
                            <img src="img/card_tov/Card-group.png" class="card-img-top p-0 b-0 rounded-0" alt="..." style="height: 13em;">
                            <div class="card-body">
                                <h5 class="card-title text-center">Классический стиль</h5>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card border-0 rounded-0 mb-5" style="height: 18em;">
                            <img src="img/card_tov/Card-group.png" class="card-img-top p-0 b-0 rounded-0" alt="..." style="height: 13em;">
                            <div class="card-body">
                                <h5 class="card-title text-center">Классический стиль</h5>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card border-0 rounded-0 mb-5" style="height: 18em;">
                            <img src="img/card_tov/Card-group.png" class="card-img-top p-0 b-0 rounded-0" alt="..." style="height: 13em;">
                            <div class="card-body">
                                <h5 class="card-title text-center">Классический стиль</h5>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card border-0 rounded-0 mb-5" style="height: 18em;">
                            <img src="img/card_tov/Card-group.png" class="card-img-top p-0 b-0 rounded-0" alt="..." style="height: 13em;">
                            <div class="card-body">
                                <h5 class="card-title text-center">Классический стиль</h5>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card border-0 rounded-0 mb-5" style="height: 18em;">
                            <img src="img/card_tov/Card-group.png" class="card-img-top p-0 b-0 rounded-0" alt="..." style="height: 13em;">
                            <div class="card-body">
                                <h5 class="card-title text-center">Классический стиль</h5>
                            </div>
                        </div>
                    </div>

                </div>
                <div
                    class="swiper-pagination swiper-pagination-bullets swiper-pagination-horizontal swiper-pagination-bullets-dynamic">
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="bg-light">
        <div class="container">
            <div class="row mb-5">
                <h1 class="mt-5 center__h1__popular">
                    Акции
                </h1>
                <div class="swiper mySwiper m-1">
                    <div class="swiper-wrapper mb-5">
                        <div class="swiper-slide mb-5">
                            <div class="card b-0 rounded-0">
                                <!--Карточка с акцией-->
                                <p class="m-0 p-2 position-absolute top-0 start-0 text-white b-0"
                                    style="background-color: #07607C;">17%</p>
                                <!--Карточка с акцией-->

                                <img src="img/card_tov/card-tovar.png" class="card-img-top p-0 b-0 rounded-0" alt="..." style="height: 14em;">
                                <div class="card-body">
                                    <h5 class="card-title">Кухня "ОК005"</h5>
                                    <p class="card-text m-0">Стиль: Классический</p>
                                    <p class="card-text m-0">Цвет: Черный</p>
                                    <p class="card-text m-0">Материал: ЛДСП</p>
                                    <a href="#"
                                        class="btn btn-primary btn-danger b-0 rounded-0 mt-3 ms-2 d-flex justify-content-center"
                                        style="padding: 1% 2% 1% 2%;">от 56 200 ₽ &#8594;</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide mb-5">
                            <div class="card b-0 rounded-0">
                                <!--Карточка с акцией-->
                                <p class="m-0 p-2 position-absolute top-0 start-0 text-white b-0"
                                    style="background-color: #07607C;">17%</p>
                                <!--Карточка с акцией-->

                                <img src="img/card_tov/card-tovar.png" class="card-img-top p-0 b-0 rounded-0" alt="..." style="height: 14em;">
                                <div class="card-body">
                                    <h5 class="card-title">Кухня "ОК005"</h5>
                                    <p class="card-text m-0">Стиль: Классический</p>
                                    <p class="card-text m-0">Цвет: Черный</p>
                                    <p class="card-text m-0">Материал: ЛДСП</p>
                                    <a href="#"
                                        class="btn btn-primary btn-danger b-0 rounded-0 mt-3 ms-2 d-flex justify-content-center"
                                        style="padding: 1% 2% 1% 2%;">от 56 200 ₽ &#8594;</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide mb-5">
                            <div class="card b-0 rounded-0">
                                <!--Карточка с акцией-->
                                <p class="m-0 p-2 position-absolute top-0 start-0 text-white b-0"
                                    style="background-color: #07607C;">17%</p>
                                <!--Карточка с акцией-->

                                <img src="img/card_tov/card-tovar.png" class="card-img-top p-0 b-0 rounded-0" alt="..." style="height: 14em;">
                                <div class="card-body">
                                    <h5 class="card-title">Кухня "ОК005"</h5>
                                    <p class="card-text m-0">Стиль: Классический</p>
                                    <p class="card-text m-0">Цвет: Черный</p>
                                    <p class="card-text m-0">Материал: ЛДСП</p>
                                    <a href="#"
                                        class="btn btn-primary btn-danger b-0 rounded-0 mt-3 ms-2 d-flex justify-content-center"
                                        style="padding: 1% 2% 1% 2%;">от 56 200 ₽ &#8594;</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="swiper-pagination swiper-pagination-bullets swiper-pagination-horizontal swiper-pagination-bullets-dynamic">
                    </div>
                </div>
                <!--
                <div class="swiper-button-next text-white border border-5 border-white" style="background-color: #1A8AAD;"></div>
                <div class="swiper-button-prev text-white border border-5 border-white" style="background-color:#BABABA;"></div>
                -->
            </div>

        </div>
    </div>
    <div class="container">
        <div class="row mb-5" style="background-color: #E92962;">
            <div class="mb-3 col-sm-6">
                <h4 class="ms-4 mt-5 text-white">
                    Узнайте подробности
                </h4>
                <p class="text-white ms-4">
                    Закажите консультацию прямо сейчас
                </p>
                <button type="button" class="btn ms-4 text-white rounded-0" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: #B71847;">Оставить заявку</button>
            </div>
            <img src="img/banner_red.png" alt="" class="mb-3 col-sm-6 img_back_none w__h__img">
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content border border-5 rounded-0 border-info">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Заявка на консультацию</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <p class="ms-3">Оставьте свои контакты и мы свяжемся <br> с вами в течении 10 минут.</p>
                <div class="modal-body">
                    <form class="form" id="myForm" role="form">
                        <div class="mb-1">
                            <label for="inputName">Введите имя:</label>
                            <input type="text" class="form-control" name="name" id="inputName" placeholder="Введите имя">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-tel" class="col-form-label">Номер телефона:</label>
                            <input
                                type="text"
                                class="phone-field form-control rounded-0"
                                name="phone"
                                placeholder="+7(___)___-____"
                                data-rule-required="true"
                                data-rule-minlength="10"
                                data-msg="Введите номер телефона"
                            />
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn rounded-0 text-white start-0" style="background-color:#07607C" >Оставить заявку</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5 mb-5">
        <div class="row">
            <h2>Почему мы?</h2>
            <div class="col">
                <div class="good_company d-flex justify-content-start mt-4">
                    <img src="icon/icon_p/gift.svg" class="img-fluid rounded-0" alt="...">
                    <p class="m-2">Скидки и подарки</p>
                </div>
                <div class="good_company d-flex justify-content-start mt-4">
                    <img src="icon/icon_p/pensil.svg" class="img-fluid rounded-0" alt="...">
                    <p class="m-2">Экспертные дизайнеры</p>
                </div>
                <div class="good_company d-flex justify-content-start mt-4">
                    <img src="icon/icon_p/cube4.svg" class="img-fluid rounded-0" alt="...">
                    <p class="m-2">Более 500 оттенков</p>
                </div>
                <div class="good_company d-flex justify-content-start mt-4">
                    <img src="icon/icon_p/human.svg" class="img-fluid rounded-0" alt="...">
                    <p class="m-2">Выезд дизайнера</p>
                </div>
            </div>

            <div class="col">
                <div class="good_company d-flex justify-content-start mt-4">
                    <img src="icon/icon_p/cube.svg" class="img-fluid rounded-0" alt="...">
                    <p class="m-2">Эскиз в объеме</p>
                </div>
                <div class="good_company d-flex justify-content-start mt-4">
                    <img src="icon/icon_p/star.svg" class="img-fluid rounded-0" alt="...">
                    <p class="m-2">Проверка качества</p>
                </div>
                <div class="good_company d-flex justify-content-start mt-4">
                    <img src="icon/icon_p/car.svg" class="img-fluid rounded-0" alt="...">
                    <p class="m-2">Доставка до 2 часов</p>
                </div>
                <div class="good_company d-flex justify-content-start mt-4">
                    <img src="icon/icon_p/option.svg" class="img-fluid rounded-0" alt="...">
                    <p class="m-2">Сборка под ключ</p>
                </div>
            </div>

            <img src="img/slider/slide-2.png" class="col-6 img_back_none" alt="...">
        </div>
    </div>

    <div class="container mb-5">
        <div class="row justify-content-center" style="background-color: #1A8AAD;">
            <div class="col-md-6 mb-0" style="background-image: url(img/banner.png);">
                <h4 class="ms-4 mt-5 text-white">
                    Бесплатная <br>
            консультация <br>
            от дизайнера
                </h4>
                <p class="text-white ms-4">
                    Lorem ipsum dolor sit amet, <br>
        consectetur adipiscing elit.
                </p>

            </div>

            <div class="col-md-6 p-4">
                <form class="form" id="myForm" role="form">
                    <div class="mb-3">
                        <label for="inputName" class="form-label text-white">Ваше имя</label>
                        <input type="text" class="form-control border-white border-3 rounded-0 bg-info text-white" id="inputName" name="name">
                        <div class="mb-3 mt-3">
                            <label for="number" class="form-label text-white">Номер телефона</label>
                            <input type="text" name="phone" class="form-control phone-field border-white border-3 rounded-0 bg-info text-white" id="exampleInputTel" data-rule-required="true" data-rule-minlength="10" >
                        </div>
                        <button type="submit" class="btn btn-primary border-white rounded-0 text-white border-0 p-2" style="background-color:#07607C;">Оставить заявку</button>
                </form>
            </div>
        </div>
    </div>
    </div>

    <div class="container mt-5">

        <div class="row">
            <img src="img/card_tov/card-tovar.png" class="col-sm-6 mt-4 w__h__img" alt="...">
            <div class="col-sm-6 mt-5">
                <h3>О нас</h3>
                <p>
                    As you can see the paragraphs gracefully wrap around the floated image. Now imagine how this
                    would look with some actual content in here, rather than just this boring placeholder text
                    that goes on and on, but actually conveys no tangible information at. It simply takes up
                    space and should not really be read.
                </p>
                <p>
                    As you can see the paragraphs gracefully wrap around the floated image. Now imagine how this
                    would look with some actual content in here, rather than just this boring placeholder text
                    that goes on and on, but actually conveys no tangible information at. It simply takes up
                    space and should not really be read.
                </p>
            </div>
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="row">
            <h2>Процесс изготовления кухни для вас</h2>
            <div class="col-sm-6">
                <div class="good_company d-flex justify-content-start mt-4  border border-danger border-4">
                    <img src="icon/1.svg" class="img-fluid rounded-0" alt="...">
                    <p class="m-3">Заявка на сайте</p>
                </div>
                <div class="good_company d-flex justify-content-start mt-4 border border-danger border-4">
                    <img src="icon/2.svg" class="img-fluid rounded-0" alt="...">
                    <p class="m-3">Встреча с дизайнером</p>
                </div>
                <div class="good_company d-flex justify-content-start mt-4 border border-danger border-4">
                    <img src="icon/3.svg" class="img-fluid rounded-0" alt="...">
                    <p class="m-3">Проверка технологом и производство</p>
                </div>
                <div class="good_company d-flex justify-content-start mt-4 border border-danger border-4">
                    <img src="icon/4.svg" class="img-fluid rounded-0" alt="...">
                    <p class="m-3">Доставка и сборка</p>
                </div>
            </div>
            <img src="img/slider/slide-2.png" class="col-sm-6 mt-4 w__h__img" alt="...">
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <h1 class="mt-5 mb-5 center__h1__popular">Советы от наших дизайнеров <br> по подбору кухни</h1>

            <div class="swiper mySwiper mb-5">
                <div class="swiper-wrapper p-0 m-0">
                    <div class="swiper-slide">
                        <div class="rev">
                            <div class="card-body">
                                <div class="good_company d-flex justify-content-start mb-2">
                                    <img src="img/rev/Константин.png" class="img-thumbnail" alt="...">
                                    <p class="card-title mt-4 ms-3"> <b> Константин </b><br>
                                                Стаж: 10 лет
                                    </p>
                                </div>
                                <p class="card-text">Some quick example text to build on the card title and make up
                                    the bulk of the card's content.</p>
                                <a href="#" class="card-link link-dark text-decoration-none">Подробнее &#8594;</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="rev">
                            <div class="card-body">
                                <div class="good_company d-flex justify-content-start mb-2">
                                    <img src="img/rev/Константин.png" class="img-thumbnail" alt="...">
                                    <p class="card-title mt-4 ms-3"> <b> Леша </b><br>
                                                Стаж: 10 лет
                                    </p>
                                </div>
                                <p class="card-text">Some quick example text to build on the card title and make up
                                    the bulk of the card's content.</p>
                                <a href="#" class="card-link link-dark text-decoration-none">Подробнее &#8594;</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="rev">
                            <div class="card-body">
                                <div class="good_company d-flex justify-content-start mb-2">
                                    <img src="img/rev/Константин.png" class="img-thumbnail" alt="...">
                                    <p class="card-title mt-4 ms-3"> <b> Дима </b><br>
                                                Стаж: 10 лет
                                    </p>
                                </div>
                                <p class="card-text">Some quick example text to build on the card title and make up
                                    the bulk of the card's content.</p>
                                <a href="#" class="card-link link-dark text-decoration-none">Подробнее &#8594;</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="swiper-pagination swiper-pagination-bullets swiper-pagination-horizontal swiper-pagination-bullets-dynamic">
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="card text-white w-100 rounded-0" style="max-height: 1000px; background-color: #1A8AAD;">
                <img src="img/banner-bottom.png" class="position-absolute top-50 end-0 translate-middle-y p-5 w__h__img" alt="...">
                <div class="card-img-overlay">
                    <h5 class="card-title position-absolute top-50 start-25 translate-middle-y p-5">Основные <br> элементы
                        <br> кухонь
                    </h5>
                </div>
            </div>
        </div>
    </div>sss

    <?php require 'main-parts/footer.php'?>

    <!--
                                        JS файлы
-->
    <!-- Swiper JS -->
    <script src="js/swiper-bundle.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jQuery.js"></script>
    <script src="js/app.js"></script>

    <!--
                                        JS файлы
    -->
</body>

</html>