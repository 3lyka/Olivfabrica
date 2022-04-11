<!DOCTYPE html>
<html lang="en">

<?php require 'main-parts/head.php'; ?>
<body>
<?php require 'main-parts/header.php'; ?>



    <main style="margin-top:180px;">
        <div class="container">
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
                <div id="myBtnContainer" class="mb-4 filter-button">
                    <button class="btn active" onclick="filterSelection('all')">Все товары</button>
                    <button class="btn" onclick="filterSelection('hi-tech')"> Хай-тек</button>
                    <button class="btn" onclick="filterSelection('modern')"> Модерн</button>
                    <button class="btn" onclick="filterSelection('future-style')"> Современный стиль</button>
                    <button class="btn" onclick="filterSelection('scandi-style')"> Скандинавский стиль</button>
                    <button class="btn" onclick="filterSelection('classic-style')"> Классический стиль</button>
                </div>
            </div>
        </div>

        <div class="container">
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
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion
                                body.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row center_card">

                    <!-- Control buttons -->

                    <!-- Фильтруемые элементы. Примечание что некоторые из них имеют несколько имен классов (это может быть использовано, если они принадлежат к нескольким категориям) -->
                    <div class="container">
                    <?php
                    $catalogСoach = get_catalogСoach_all ();
                    foreach ($catalogСoach as $catalogСoach): 
                    ?>

                            <div class="filterDiv catalogCoach">
                                <div class="card b-0 rounded-0">
                                    <img src="/img/card_tov/card-tovar.png" class="card-img-top p-0 b-0 rounded-0" alt="..." style="height: 14em;">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $catalogCoach ["tittle_ccoach"];?></h5>
                                        <p class="card-text m-0"><?php echo $catalogCoach ["style__ccoach"];?></p>
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
                    <nav aria-label="Page navigation example">
                        <ul class="pagination d-flex justify-content-center mt-5">
                            <li class="page-item">
                                <a class="page-link text-dark" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link text-dark" href="#">1</a></li>
                            <li class="page-item"><a class="page-link text-dark" href="#">2</a></li>
                            <li class="page-item"><a class="page-link text-dark" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link text-dark" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>

                    <div class="container">
                        <div class="row justify-content-center" style="background-color: #1A8AAD;">
                            <div class="col-md-6 mb-0"
                                style="background-image: url(/img/banner.png);background-repeat: no-repeat;">
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
                </div>


        </div>
        </div>
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