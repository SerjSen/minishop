<?php

/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 29.03.17
 * Time: 12:44
 */
class NewsController
{
    public function actionIndex()
    {
        echo('Все записи');
        return true;
    }

    public function actionView($category, $id)
    {
        echo('Одна запись '. $id);
        return true;
    }
}