<div class="left col-xs-3">
    <div class="left_container">
        <div class="left_nav">
            <ul class="list-group submenu">
                <li class="list-group-item"><a href="/">Все</a></li>

                <?php foreach($categories as $category) {?>
                <li class="list-group-item"><a href="?cat_id=<?php echo $category["id"];?>"><?php echo $category["name"];?></a></li>
                <?php }?>

            </ul>
        </div>
        <div class="left_banner">
            <img src="../img/banners/banner1.jpg" alt="..." class="img-thumbnail">
        </div>
    </div>
</div>