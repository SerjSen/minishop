<?php include ROOT . '/views/layouts/header.php'; ?>

    <section>
        <div class="container">
            <div class="row">

                <div class="col-sm-4 col-sm-offset-4 padding-right">

                    <?php if ($result): ?>
                        <div class="alert alert-success alert-dismissable fade in">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <?= ' Данные успешно изменены !' ?>
                        </div>                    <?php else: ?>
                        <?php if (isset($errors) && is_array($errors)): ?>
                            <div class="alert alert-danger alert-dismissable fade in">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

                                <?php foreach ($errors as $error): ?>
                                    <?php echo $error; ?><br>
                                <?php endforeach; ?>
                            </div>

                        <?php endif; ?>

                        <div class="signup-form"><!--sign up form-->
                            <h2>Редактирование данных</h2>
                            <form action="#" method="post">
                                <p>Имя:</p>
                                <input type="text" name="name" placeholder="Имя" value="<?php echo $name; ?>"/>

                                <p>Пароль:</p>
                                <input type="password" name="password" placeholder="Пароль"
                                       value="<?php echo $password; ?>"/>
                                <br/>
                                <input type="submit" name="submit" class="btn btn-default" value="Сохранить"/>
                            </form>
                        </div><!--/sign up form-->

                    <?php endif; ?>
                    <br/>
                    <br/>
                </div>
            </div>
        </div>
    </section>

<?php include ROOT . '/views/layouts/footer.php'; ?>