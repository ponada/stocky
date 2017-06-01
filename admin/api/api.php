<?php
    require_once 'utils.php';
        $categories = getAllCategories();
        $categoriesById = getCategoryById($categoryId);
        $info = getInfo();
        $items = getLastItemsCountByStep(1,10,0);




