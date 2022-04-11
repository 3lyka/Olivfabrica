<main class="popular__slider bg-light mb-5">
        <div class="container">
            <div class="row mb-5">
                <h1 class="mt-5 center__h1__popular">
                    Акции
                </h1>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper mb-5">

                    <?php
                     $slide = get_slide_all ();
                     foreach ($slide as $slide): ?>

                            <div class="swiper-slide mb-5">
                            <div class="card b-0 rounded-0">
                                <!--Карточка с акцией-->
                                   <p class="m-0 p-2 position-absolute top-0 start-0 text-white b-0"
                                    style="background-color: #07607C;"><?php echo $slide ["sale_sale"];?>%</p>
                                <!--Карточка с акцией-->
                                    <img src="/img/card_tov/<?php echo $slide ["img_sale"];?>" class="card-img-top p-0 b-0 rounded-0" alt="..." style="height: 14em;">
                                    <div class="card-body">
                                    <h5 class="card-title"><?php echo $slide ["tittle_sale"];?></h5>
                                    <p class="card-text m-0"><?php echo $slide ["style_sale"];?></p>
                                    <p class="card-text m-0"><?php echo $slide ["color_sale"];?></p>
                                    <p class="card-text m-0"><?php echo $slide ["material_sale"];?></p>
                                    <a href="#"
                                        class="btn btn-primary btn-danger b-0 rounded-0 mt-3 ms-2 d-flex justify-content-center"
                                        style="padding: 1% 2% 1% 2%;"><?php echo $slide ["price_sale"];?> ₽ &#8594;</a>
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