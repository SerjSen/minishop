<?php

/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 01.06.16
 * Time: 9:27
 */
class AdminController extends AdminBase
{

    public function actionIndex()
    {

        self::checkAdmin();

        require_once(ROOT . '/views/admin/index.php');
        return true;
    }

}