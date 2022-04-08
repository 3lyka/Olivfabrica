<main class="popular__slider bg-light mb-5">
        <div class="container">
            <div class="row mb-5">
                <h1 class="mt-5 center__h1__popular">
                    Популярные товары
                </h1>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper mb-5">

                    <?php
                     $swiper = get_swiper_all ();
                     foreach ($swiper as $swiper): ?>

                            <div class="swiper-slide mb-5">
                            <div class="card b-0 rounded-0">
                                <img src="/img/card_tov/card-tovar.png" class="card-img-top p-0 b-0 rounded-0" alt="..." style="height: 14em;">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $swiper ["tittle"];?></h5>
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
                    
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </main>