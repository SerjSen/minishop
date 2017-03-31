<?php

include_once ROOT . '/models/News.php';

class NewsController
{
    public function actionIndex()
    {
        $news[] = News::getAll();
        debug($news);
    }

    public function actionView($id)
    {
        if ($id) {
            $one = News::getById($id);
        }
        debug($one);
    }
}