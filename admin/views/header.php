<ul class="nav nav-bar fixed clearfix">
    <div class="container">
        <li id="logo" >
            <a href="#" class="navbar-brand"><?php echo $info["title"];?></a>
        </li>
        <li id="menu" class="navbar-right" style="">
            <ul>
                <li role="presentation" class="dropdown">
                    <a href="#" class="dropdown-toggle" id="drop4" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="glyphicon glyphicon-list" aria-hidden="true"></span>
                    </a>
                    <ul class="dropdown-menu categories" id="menu1" aria-labelledby="drop4">
                        <li><a href="#">Все</a></li>

                        <?php foreach($categories as $category) {?>
                        <li><a href="#"><a href="#"><?php echo $category["name"];?></a></li>
                        <?php }?>

                        <li role="separator" class="divider"></li>
                        <li data-toggle="modal" data-target="#loadImg">
                            <span class="glyphicon glyphicon-picture aria-hidden="true"></span>
                            <span>Загрузить изображение</span>
                        </li>
                        <li data-toggle="modal" data-target="#sendMessage">
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                            <span>Написать нам</span>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
    </div>
</ul>