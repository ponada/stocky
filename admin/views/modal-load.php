<div class="modal fade" id="loadImg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Загрузить изображение</h4>
            </div>
            <div class="modal-body">
                <form id="loadImg" method="post" enctype="multipart/form-data">
                    <div class="file-upload">
                        <input type="file" class="btn" name="picture">
                    </div>
                    <select class="form-control">
                        <option>Категория1</option>
                        <option>Категория2</option>
                        <option>Категория3</option>
                        <option>Категория4</option>
                        <option>Категория5</option>
                    </select>
                    <input type="text" name="title" id="imgTitle" class="form-control" placeholder="Описание">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-primary" id="loadBtn">Загрузить</button>
            </div>
        </div>
    </div>
</div>