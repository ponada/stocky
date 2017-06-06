<?php
define('CATEGORY', "../admin/bd/categories.json");
define('CATEGORY_ITEMS', "../admin/bd/category_items");
define('INFO', "../admin/bd/info.json");
define('IMAGES_PATH', "../img/gallery/");
define('ITEM_VALIDATION_PATH',"../bd/items_validation.csv");
define('IMAGE_MAX_WIDTH',400);


define('ADMIN_CATEGORIES_ITEMS_PATH', 'bd/category_items');
define('ADMIN_CATEGORIES_PATH', 'bd/categories.json');

define('ADMIN_AJAX_VALIDATION_ITEMS_PATH','../admin/bd/items_validation.csv');
define('ADMIN_AJAX_CATEGORIES_ITEMS_PATH','../admin/bd/category_items');
define('ADMIN_AJAX_CATEGORIES_PATH','../admin/bd/categories.json');
define('ADMIN_AJAX_IMAGES_PATH','../../img/gallery/');
define('ADMIN_AJAX_INFO_PATH',"../admin/bd/info.json");

function validateUser($email, $password){
    $info = getInfo('bd/info.json');
    $answer = array("status"=>false);
    if ($email != $info['email'] or $password != $info['password'] ){
        $answer["message"] = true;
    }else{
        $answer["status"] = true;
    }
    return $answer;
}

function addItemToValidation($title,$categoryId,$url = null){
    return true;
    $image_path = '../'.IMAGES_PATH;
    if (isset($url)){
        if( $image = file_get_contents($url) ) {

            # Генерируем имя tmp-изображения
            $tmp_file_name = md5(microtime());

            # Сохраняем изображение
            file_put_contents($tmp_file_name, $image);

            # Очищаем память
            unset($image);

            $name = uploadImageAndResize($tmp_file_name, $image_path, IMAGE_MAX_WIDTH);
            return addItemToFile($title,$categoryId, $name);
        }
        return false;
    }else if(isset($_FILES['file'])){
        return true;
        $tmp_file_name = $_FILES["file"]['tmp_name'];
        $name = uploadImageAndResize($tmp_file_name, $image_path, IMAGE_MAX_WIDTH);
        return addItemToFile($title,$categoryId, $name);
    }
    else{
        return false;
    }
}

# Функция для загрузки и ресайза изображений
function uploadImageAndResize($imageTemp, $imagePath, $maxWidth ){
    /*
     * $imageTemp - ссылка на временное изображение
     * $imagePath - папка, куда сохраняем обработанную картинку
     * $maxWidth -  ширина картинки
    */

    # Допустимые расширения
    $enabled = array( 'png', 'gif', 'jpeg');

    if( $info = getimagesize( $imageTemp ) )
    {
        $type = trim( strrchr( $info['mime'], '/' ), '/' );

        # Если тип не подходит
        if( !in_array( $type, $enabled ) )
            return false;

        # Исходя из типа формируем названия функций
        $imageCreateF = 'imagecreatefrom' . $type;
        $imageSaveF = 'image' . $type;
        $imageName = md5(microtime()) . '.' . $type;

        # Получаем данные об изображении
        list( $width, $height ) = $info;

        # Создаём ресурс изображения
        $src_im = $imageCreateF( $imageTemp );

        # Коэффициент
        $ratio = $width / $maxWidth;

        # Вычисляем ширину
        $new_width = $maxWidth;

        # Вычисляем высоту
        $new_height = $height / $ratio;

        # Создаём новое изображение
        $dst_im = imagecreatetruecolor($new_width, $new_height);

        # Ресайзим
        imagecopyresampled( $dst_im, $src_im, 0, 0, 0, 0, $new_width, $new_height, $width, $height );

        # Чистим память
        unset( $src_im );

        # Сохраняем превьюшку
        if( !$imageSaveF($dst_im, $imagePath . $imageName ) )
            return  false;

        # Очищаем память
        unset( $dst_im );

        # Удалем временный файл
        unlink( $imageTemp );

        # Возвращаем имя
        return $imageName;
    }
}

function addItemToFile($title,$categoryId,$imageName){

    if (file_exists(ITEM_VALIDATION_PATH) && $imageName){
        $handler = fopen(ITEM_VALIDATION_PATH,'a');
        $item = array($categoryId,$imageName,$title);
        fputcsv($handler,$item);
        fclose($handler);
        return true;
    }

    return false;
}

function getAllCategories($path = CATEGORY){
    if(file_exists($path)){
        $content = file_get_contents($path);
        $categories = json_decode($content,true);
        return $categories;
    }
    return "getAllCategories ERROR";
}

function getCategoryById($id){
    if(file_exists(CATEGORY)){
        $content = file_get_contents(CATEGORY);
        $categories = json_decode($content,true);
        foreach ($categories as $category) {
            if ($category["id"] == $id){
                return $category;
            }
        }
        return "getCategoryById category $id not exists";
    }
    return "getCategoryById ERROR";
}

function getInfo($path = INFO) {
    if (file_exists($path)) {
        $data = file_get_contents($path);
        return json_decode($data, true);
    }
    return "error";
}

# Get last 10 items from file csv
function getLastItemsCountByStep($categoryId, $count = 10, $step =  0){
    $fileName = CATEGORY_ITEMS.$categoryId.".csv";
    if (file_exists($fileName)){

        $items = array();
        $handler = fopen($fileName,"r");
        $countLines = 0;
        while( !feof( $handler)){
            fgets($handler);
            $countLines++;
        }
        rewind($handler);

        $endPosition = $countLines - $count * $step - 1;
        $startPosition = $endPosition - $count;

        for ($i=0; $item = fgetcsv($handler); $i++){
            if ($i >= $endPosition){
                break;
            }
            if ($i >= $startPosition){
                array_unshift($items, $item);
            }
        }
        fclose($handler);
        return $items;
    }
    return "getLastItemsCountByStep $fileName ERROR";
}

# Get count lines from file
function getCountLinesInFile($filePath){
    if (file_exists($filePath)){
        $count = 0;
        $handler = fopen($filePath, 'r');
        while( !feof($handler)){
            fgets($handler);
            $count++;
        }
        fclose( $handler);
        return $count;
    }
    return "getCountLinesInFile error";
}

function sendMessage($name,$text){
    $info    = getInfo('../bd/info.json');
    $to      = $info['email'];
    if ($to){
        $subject = 'Forfan - сообщение';
        $message = "Имя: $name \r\nСообщение: $text";
        $headers = 'From: no-replay@forfan.by'. "\r\n" .
            'Reply-To: '. $to . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
        mail($to, $subject, $message, $headers);
        return true;
    }else{
        return false;
    }
}

function createCategory($name) {
    $idCategory = getMaxIdCategory() + 1;
    fopen(ADMIN_CATEGORIES_ITEMS_PATH.$idCategory.".csv", 'w');
    $categories = getAllCategories(ADMIN_CATEGORIES_PATH);
    $categories[] = array(
        "id" => $idCategory,
        "name" => $name
    );
    file_put_contents(ADMIN_CATEGORIES_PATH, json_encode($categories));
    return true;
}

function getMaxIdCategory() {
    $categories = getAllCategories(ADMIN_CATEGORIES_PATH);
    $id = $categories[0]["id"];
    foreach ($categories as $category) {
        if($category["id"] > $id) {
            $id = $category["id"];
        }
    }
    return $id;
}

function getAllItemsInCategory ($categoryId) {
    $fileName = ADMIN_CATEGORIES_ITEMS_PATH .$categoryId.".csv";
    if (file_exists($fileName)){

        $items = array();
        $handler = fopen($fileName,"r");
        $countLines = 0;
        while( !feof( $handler)){
            $items[] = fgetcsv($handler);
        }
        fclose($handler);
        return $items;
    }
    return "getAllItemsInCategory $fileName ERROR";
}

# Переименование категории
function renameCategory($id, $newName){
    $categories = getAllCategories(ADMIN_AJAX_CATEGORIES_PATH);
    foreach ($categories as &$category){
        if($category["id"] == $id){
            $category["name"] = $newName;
            break;
        }
    }
    $str = json_encode($categories);
    file_put_contents(ADMIN_AJAX_CATEGORIES_PATH,$str);
    return array("status"=>true,"name"=>$newName);
}

# Удаление категории
function deleteCategory($categoryId){
    $items = getAllItemsInCategory($categoryId);
    foreach ($items as $item){
        unlink(ADMIN_AJAX_IMAGES_PATH.$item[0]);
    }
    unlink(ADMIN_AJAX_CATEGORIES_ITEMS_PATH.$categoryId.'.csv');
    $categories = getAllCategories(ADMIN_AJAX_CATEGORIES_PATH);
    foreach ($categories as $key=>$category){
        if($category["id"] == $categoryId){
            $name = $category["name"];
            unset($categories[$key]);
            break;
        }
    }
    $categories = array_values($categories);
    $str = json_encode($categories);
    file_put_contents(ADMIN_AJAX_CATEGORIES_PATH,$str);
    $category = array('id'=>$categoryId,'name' => $name);
    return array('status'=>true,'category'=>$category);
}
?>

