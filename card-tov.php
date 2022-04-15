<!DOCTYPE html>
<html lang="en">
<?php require 'main-parts/head.php'; ?>
<body>
<?php require 'main-parts/header.php'; ?>


<?php $filter = get_filter_by_id($_GET['id']);?>
<main style="margin-top: 150px;">

<div class="container mb-5">



<div class="row filter">

<h3>Кухня "ОК005"</h3>
<div class="col-sm-6 mt-4">
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
<div class="carousel-inner">
<div class="carousel-item active">
<img src="/img/card_tov/card-tovar.png" class="d-block w-100" alt="...">
</div>
<div class="carousel-item">
<img src="/img/slider/slider-1.png" class="d-block w-100" alt="...">
</div>
</div>
<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="visually-hidden">Next</span>
</button>
</div>
</div>
<div class="col-sm-6 mt-5">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed erat lobortis erat ut amet velit at sagittis. In nunc id diam ut risus. Quam elementum viverra et quis diam accumsan, lectus morbi rhoncus. Commodo, lacus molestie enim vitae consequat tellus.</p>
<div class="card-body lh-lg">
<p class="card-text m-0">Стиль: Классический</p>
<p class="card-text m-0">Цвет: Черный</p>
<p class="card-text m-0">Материал: ЛДСП</p>
<p class="card-text m-0">Материал корпуса: ЛДСП</p>
<p class="card-text m-0">Наполнение: lectus morbi rhoncus</p>
<p class="card-text m-0"><b>от 56 200 ₽</b></p>


<a href="#"
class="btn btn-primary btn-danger b-0 rounded-0 mt-5 d-flex justify-content-center"
style="padding: 1% 1% 1% 1%;">Рассчитать стоимость &#8594;</a>
</div>
</div>
</div>

</div>

<?php require 'block-item/popular-tov.php'; ?>
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