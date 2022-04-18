<main class="popular__slider bg-light mb-5">
<div class="container">
<div class="row mb-5">
<h1 class="mt-5 center__h1__popular">
Популярные товары
</h1>
<div class="swiper mySwiper">
<div class="swiper-wrapper mb-5">

<?php
$swipers = get_swipers_all ();
foreach ($swipers as $swipers): ?>
<div class="swiper-slide mb-5">
<div class="card b-0 rounded-0">
<img src="/img/card_tov/<?php echo $swipers ["img"];?>" class="card-img-top p-0 b-0 rounded-0" alt="..." style="height: 14em;">
<div class="card-body">
<h5 class="card-title"><?php echo $swipers ["tittle"];?></h5>
<p class="card-text m-0"><?php echo $swipers ["style"];?></p>
<p class="card-text m-0"><?php echo $swipers ["color"];?></p>
<p class="card-text m-0"><?php echo $swipers ["material"];?></p>
<a href="/catalog/card-tov-page/card-tov-coach.php?id=<?php echo $swipers ["id"];?>"
class="btn btn-primary btn-danger b-0 rounded-0 mt-3 ms-2 d-flex justify-content-center"
style="padding: 1% 2% 1% 2%;"><?php echo $swipers ["price"];?> ₽ &#8594;</a>
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