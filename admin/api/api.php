<?php
    require_once "utils.php";
    define('CATEGORY', "../admin/bd/categories.json");
    define('CATEGORY_ITEMS', "../admin/bd/category_items");
    define('INFO', "../admin/bd/info.json");
    define('IMAGES_PATH', "../img/gallery/");
    define('PATH', "../../");
    $categories = getCategories();
    $categoriesById = getCategoriesById(1);
    $info = getInfo();
    $items = getTenItemsFromCatId(1,0,10);




