<div class="container admin">
    <form class="form-signin" method="POST">
        <div class="form-group">
            <label for="inputEmail" class="control-label">Email</label>
            <div class="">
                <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword" class="control-label">Password</label>
            <div class="">
                <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password">
            </div>
        </div>
        <div class="form-group">
            <div class="">
                <button type="submit" class="btn btn-primary">Sign in</button>
                <button type="reset" class="btn btn-primary">Clear</button>
            </div>
        </div>
        <div class="marginTop20PX alert alert-danger alert-dismissible <?php echo $access["message"] ? '': 'hidden';?>" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Ошибка!</strong> Не правильно ввели имя или пароль.
        </div>
    </form>
</div>