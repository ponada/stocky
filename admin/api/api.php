<?php
    require_once "utils.php";
    define('CATEGORY', "../admin/bd/categories.json");
    define('INFO', "../admin/bd/info.json");
    define('IMAGES_PATH', "../admin/bd/img/gallery");
    $categories = getCategories();
    $categoriesById = getCategoriesById(1);
    $info = getInfo();
    $items = getTenItemsFromCatId(1,0,10);




