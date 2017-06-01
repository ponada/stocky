<div class="container admin-admin" style="background-color: #fff;">
    <div class="row">
        <div class="admin-nav">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Профиль</a></li>
                <li role="presentation"><a href="#categories" aria-controls="categories" role="tab" data-toggle="tab">Категории</a></li>
                <li role="presentation"><a href="#images" aria-controls="images" role="tab" data-toggle="tab">Изображения</a></li>
                <li role="presentation"><a href="#bunners" aria-controls="bunners" role="tab" data-toggle="tab">Баннеры</a></li>
                <li role="presentation"><a href="#valid" aria-controls="valid" role="tab" data-toggle="tab">Валидация</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="profile">
                    <div class="row">
                        <form class="form-horizontal site-profile">
                            <div class="form-group">
                                <label for="siteName" class="control-label col-xs-3">Название сайта:</label>
                                <div class="col-xs-9">
                                    <input type="text" class="form-control" id="siteName" placeholder="stocky.com">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="siteImage" class="control-label col-xs-3">Иконка сайта:</label>
                                <div class="file-upload col-xs-9">
                                    <input type="file" id="siteImage" class="btn" name="picture">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="oldEmail" class="control-label col-xs-3">Изменить email:</label>
                                <div class="col-xs-9">
                                    <input type="email" class="form-control" id="oldEmail" placeholder="Старый email">
                                    <input type="email" class="form-control" id="newEmail" placeholder="Новый email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="oldPassword" class="control-label col-xs-3">Изменить пароль:</label>
                                <div class="col-xs-9">
                                    <input type="password" class="form-control" id="oldPassword" placeholder="Старый пароль">
                                    <input type="password" class="form-control" id="newPassword" placeholder="Новый пароль">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-3">
                                </div>
                                <div class="col-xs-9">
                                    <button type="submit" class="btn btn-primary">Сохранить изменения</button>
                                    <button type="reset" class="btn btn-default" data-dismiss="form">Сбросить</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="categories">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr class="active">
                            <th>
                                ID
                            </th>
                            <th>
                                Название категории
                            </th>
                            <th>
                                Операции
                            </th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php foreach ($categories as $category) { ?>
                        <tr>
                            <th>
                                <?php echo $category["id"]; ?>
                            </th>
                            <th>
                                <input type="text" class="form-change" value="<?php echo $category["name"]; ?>">
                            </th>
                            <th>
                                <a href="#" class="glyphicon glyphicon-pencil" data-toggle="tooltip" title="Редактировать"></a>
                                <a href="#" class="glyphicon glyphicon-trash" data-toggle="tooltip" title="Удалить"></a>
                                <a href="#" class="glyphicon glyphicon-ok" data-toggle="tooltip" title="Сохранить"></a>
                                <!-- Generated markup by the plugin -->
                                <div class="tooltip top" role="tooltip">
                                    <div class="tooltip-arrow"></div>
                                    <div class="tooltip-inner">
                                        Some tooltip text!
                                    </div>
                                </div>
                            </th>
                        </tr>
                        <?php } ?>

                        <tr>
                            <th>
                                2
                            </th>
                            <th>
                                <input type="text" class="form-change" value="Дети">
                            </th>
                            <th>
                                <a href="#" class="glyphicon glyphicon-pencil" data-toggle="tooltip" title="Редактировать"></a>
                                <a href="#" class="glyphicon glyphicon-trash" data-toggle="tooltip" title="Удалить"></a>
                                <a href="#" class="glyphicon glyphicon-ok" data-toggle="tooltip" title="Сохранить"></a>
                                <!-- Generated markup by the plugin -->
                                <div class="tooltip top" role="tooltip">
                                    <div class="tooltip-arrow"></div>
                                    <div class="tooltip-inner">
                                        Some tooltip text!
                                    </div>
                                </div>
                            </th>
                        </tr>
                        </tbody>
                    </table>
                    <button class="btn btn-primary" id="addCategory">Добавить новую категорию</button>
                </div>
                <div role="tabpanel" class="tab-pane" id="images">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr class="active">
                            <th>
                                ID
                            </th>
                            <th>
                                Изображение
                            </th>
                            <th>
                                Название
                            </th>
                            <th>
                                Категория
                            </th>
                            <th>
                                Операции
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th>
                                1
                            </th>
                            <th>
                                <img class="miniature">
                                <input type="file" class="form-change">
                            </th>
                            <th>
                                <input type="text" class="form-change" value="Животные">
                            </th>
                            <th>
                                <select class="form-change">
                                    <option>Категория1</option>
                                    <option>Категория2</option>
                                    <option>Категория3</option>
                                    <option>Категория4</option>
                                    <option>Категория5</option>
                                </select>
                            </th>
                            <th>
                                <a href="#" class="glyphicon glyphicon-pencil" data-toggle="tooltip" title="Редактировать"></a>
                                <a href="#" class="glyphicon glyphicon-trash" data-toggle="tooltip" title="Удалить"></a>
                                <a href="#" class="glyphicon glyphicon-ok" data-toggle="tooltip" title="Сохранить"></a>
                                <!-- Generated markup by the plugin -->
                                <div class="tooltip top" role="tooltip">
                                    <div class="tooltip-arrow"></div>
                                    <div class="tooltip-inner">
                                        Some tooltip text!
                                    </div>
                                </div>
                            </th>
                        </tr>
                        </tbody>
                    </table>
                    <button class="btn btn-primary" id="addImage">Добавить новое изображение</button>
                </div>
                <div role="tabpanel" class="tab-pane" id="bunners">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr class="active">
                            <th>
                                ID
                            </th>
                            <th>
                                Баннер
                            </th>
                            <th>
                                Положение
                            </th>
                            <th>
                                Категория
                            </th>
                            <th>
                                Операции
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th>
                                1
                            </th>
                            <th>
                                <img class="miniature">
                                <input type="file" class="form-change">
                            </th>
                            <th>
                                <select class="form-change">
                                    <option>Слева</option>
                                    <option>По центру</option>
                                    <option>Справа</option>
                                </select>
                            </th>
                            <th>
                                <select class="form-change">
                                    <option>Категория1</option>
                                    <option>Категория2</option>
                                    <option>Категория3</option>
                                    <option>Категория4</option>
                                    <option>Категория5</option>
                                </select>
                            </th>
                            <th>
                                <a href="#" class="glyphicon glyphicon-pencil" data-toggle="tooltip" title="Редактировать"></a>
                                <a href="#" class="glyphicon glyphicon-trash" data-toggle="tooltip" title="Удалить"></a>
                                <a href="#" class="glyphicon glyphicon-ok" data-toggle="tooltip" title="Сохранить"></a>
                                <!-- Generated markup by the plugin -->
                                <div class="tooltip top" role="tooltip">
                                    <div class="tooltip-arrow"></div>
                                    <div class="tooltip-inner">
                                        Some tooltip text!
                                    </div>
                                </div>
                            </th>
                        </tr>
                        </tbody>
                    </table>
                    <button class="btn btn-primary" id="addBanner">Добавить новый баннер</button>
                </div>
                <div role="tabpanel" class="tab-pane" id="valid">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr class="active">
                            <th>
                                Изображение
                            </th>
                            <th>
                                Название
                            </th>
                            <th>
                                Категория
                            </th>
                            <th>
                                Операции
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th>
                                <img class="miniature">
                                <input type="file" class="form-change">
                            </th>
                            <th>
                                <input type="text" class="form-change" value="Животные">
                            </th>
                            <th>
                                <select class="form-change">
                                    <option>Категория1</option>
                                    <option>Категория2</option>
                                    <option>Категория3</option>
                                    <option>Категория4</option>
                                    <option>Категория5</option>
                                </select>
                            </th>
                            <th>
                                <a href="#" class="glyphicon glyphicon-pencil" data-toggle="tooltip" title="Редактировать"></a>
                                <a href="#" class="glyphicon glyphicon-trash" data-toggle="tooltip" title="Удалить"></a>
                                <a href="#" class="glyphicon glyphicon-ok" data-toggle="tooltip" title="Сохранить"></a>
                                <!-- Generated markup by the plugin -->
                                <div class="tooltip top" role="tooltip">
                                    <div class="tooltip-arrow"></div>
                                    <div class="tooltip-inner">
                                        Some tooltip text!
                                    </div>
                                </div>
                            </th>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>