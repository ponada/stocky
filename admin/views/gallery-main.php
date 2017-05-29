<div class="gallery col-xs-6">
    <?php foreach($items as $item) {?>
    <div class="row clearfix">
        <div class="col col-xs-12">
            <img class="gallery-item" src="<?php echo IMAGES_PATH.$item[1]; ?>" alt="<?php echo $item[2]; ?>">
        </div>
    </div>
    <?php } ?>
</div>