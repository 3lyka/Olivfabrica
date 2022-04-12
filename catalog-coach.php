<!DOCTYPE html>
<html lang="en">

<?php require 'main-parts/head.php'; ?>

<body>

<?php require 'main-parts/header.php'; ?>

    <main style="margin-top:180px;">
        <div class="container p-0 m-0 m-auto">
            <div class="row">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active "><a class="text-decoration-none fw-light text-secondary"
                                href="#">Главная</a></li>
                        <li class="breadcrumb-item active"><a class="text-decoration-none fw-light text-secondary"
                                href="#">Каталог</a></li>
                        <li class="breadcrumb-item active"><a class="text-decoration-none fw-light text-secondary"
                                href="#">Кухни</a></li>
                    </ol>
                </nav>
                <h3>Каталог</h3>
                <div id="myBtnContainer" class="mb-4">
                    <button class="btn active" onclick="filterSelection('all')">Все товары</button>
                    <button class="btn" onclick="filterSelection('hi-tech')"> Хай-тек</button>
                    <button class="btn" onclick="filterSelection('modern')"> Модерн</button>
                </div>
            </div>
        </div>

        <div class="container p-0 m-0 m-auto">
            <div class="row">
                <div class="accordion col-md-3 col-sm-12" id="accordionExample">
                    <div class="accordion-item mb-3">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed text-info fw-bold border border-2 rounded-0 border-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                              Кухни
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul class="list-unstyled lh-lg">
                                    <li><a class="text-decoration-none text-dark" href="#">Классический стиль</a></li>
                                    <li><a class="text-decoration-none text-dark" href="#">Современный стиль</a></li>
                                    <li><a class="text-decoration-none text-dark" href="#">Хай-тек кухни</a></li>
                                    <li><a class="text-decoration-none text-dark" href="#">Кухни в стиле модерн</a></li>
                                    <li><a class="text-decoration-none text-dark" href="#">Скандинавский стиль</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion accordion mb-3 col-md-3 col-sm-12" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed text-info fw-bold border border-2 rounded-0 border-info" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                              Фильтр
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <ul class="list-unstyled lh-lg">
                                    <li>
                                    <p>Цвет</p>
                                    <div class="form-check" id="myBtnContainer">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" onclick="filterSelection('black')">
                                    <label class="form-check-label" for="defaultCheck1"> Черный</label>
</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="container mt-4 p-0 m-0 m-auto">
                <div class="row">
                            <?php
                             $filter = get_filter_all ();
                             foreach ($filter as $filter): ?>

                            <div class="filter col-lg-3 col-sm-6 center_card black <?php echo $filter ["category"];?>">
                                <div class="card mb-2 b-0 rounded-0">
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
                                
                    <?php endforeach; ?>

                    </div>
            </div>


        </div>
        </div>
        <?php require 'block-item/forms-free-design.php'; ?>
    </main>

    <?php require 'main-parts/footer.php'; ?>


    <!--
                                        JS файлы
-->
    <!-- Swiper JS -->
    <script src="/js/swiper-bundle.js"></script>
    <script src="/js/bootstrap.js"></script>
    <script src="/js/jQuery.js"></script>
    <script src="/js/app.js"></script>

    <!--
                                        JS файлы -->
</body>

</html>