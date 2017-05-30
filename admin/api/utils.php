<?php
function getTenItemsFromCatId($id, $step = 0, $count = 10) {
    $startPosition = $step* $count;
    $endPosition = $startPosition + $count;
    $items = array();
    if (file_exists(CATEGORY_ITEMS.$id.".csv")) {
        $handler = fopen(CATEGORY_ITEMS.$id.".csv", "r");
        for ($i = 0; $item = fgetcsv($handler); $i++) {
            if ($i >= $endPosition) {
                break;
            }
            if ($i >= $startPosition) {
                $items[] = $item;
            }
        }
        fclose($handler);
        return $items;
    }
    return "error";
}
function getInfo() {
    if (file_exists(INFO)) {
        $data = file_get_contents(INFO);
        return json_decode($data, true);
    }
    return "error";
}

function getCategories() {
    if (file_exists(CATEGORY)) {
        $data = file_get_contents(CATEGORY);
        return json_decode($data, true);
    }
    return "error";
}

function getCategoriesById($id) {
    if (file_exists(CATEGORY)) {
        $data = file_get_contents(CATEGORY);
        $categories = json_decode($data, true);
        foreach ($categories as $category) {
            if ($categories["id"] == $category) {
                return $category;
            }
        }
        return "no such category";
    }
    return "error";
}
?>