<!DOCTYPE html>
<html lang="en">

<?php require '../main-parts/head.php'; ?>

<body>

<?php require '../main-parts/header.php'; ?>

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
<div id="myBtnContainer" class="m-0 p-3">
<button class="btn active" onclick="filterSelection('all')">Все товары</button>
<button class="btn" onclick="filterSelection('hi-tech')" id="coach-hi-tech"> Хай-тек</button>
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
<li><a class="text-decoration-none text-dark" href="#">Угловая</a></li>
<li><a class="text-decoration-none text-dark" href="#">Прямая</a></li>
<li><a class="text-decoration-none text-dark" href="#">П- образная</a></li>
<li><a class="text-decoration-none text-dark" href="#">Круглая</a></li>
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
$filters = get_filters_all ();
foreach ($filters as $filters): ?>

<?php $category_name = get_category_by_id($filters["category_id"]); ?>

<div class="filterDiv col-lg-3 col-sm-6 mb-3 center_card <?php echo $filters ["color_id"];?> <?php echo $category_name; ?>">
<div class="card mb-2 b-0 rounded-0">
<img src="/img/card_tov/<?php echo $filters ["img"];?>.png" class="card-img-top p-0 b-0 rounded-0" alt="..." style="height: 14em;">
<div class="card-body">
<h5 class="card-title m-0">Название: <?php echo $filters ["tittle"];?></h5>
<p class="card-text m-0">Стиль: <?php echo $filters ["style"];?></p>
<p class="card-text m-0">Цвет: <?php echo $filters ["color"];?></p>
<p class="card-text m-0">Материал: <?php echo $filters ["material"];?></p>
<a href="http://olivfabrica/catalog/card-tov-page/card-tov-coach.php?id=<?php echo $filters ["id"];?>"
class="btn btn-primary btn-danger b-0 rounded-0 mt-3 ms-2 d-flex justify-content-center"
style="padding: 1% 2% 1% 2%;">от <?php echo $filters ["price"];?> ₽ &#8594;</a>
</div>
</div>
</div>

<?php endforeach; ?>

</div>
</div>



</div>
</div>
<?php require '../block-item/forms-free-design.php'; ?>
</main>

<?php require '../main-parts/footer.php'; ?>

<!--
JS файлы
-->

<script>
    filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  // Добавить класс "show" (display:block) к отфильтрованным элементам и удалите класс "show" из элементов, которые не выбраны
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

// Показать отфильтрованные элементы
function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

// Скрыть элементы, которые не выбраны
function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}

// Добавить активный класс к текущей кнопке управления (выделите ее)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
  $(document).mouseup(function (e){  
    var div = $(".close-on");  //класс элемента вне которого клик
    if (!div.is(e.target) && div.has(e.target).length === 0) {  
            div.removeClass('active');  
    }
  });
}
 </script>

<!-- Swiper JS -->
<script src="/js/swiper-bundle.js"></script>
<script src="/js/bootstrap.js"></script>
<script src="/js/jQuery.js"></script>
<script src="/js/app.js"></script>

<!--
JS файлы -->
</body>

</html>