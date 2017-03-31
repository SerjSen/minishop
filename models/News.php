<?php

class News
{
    public static function getAll()
    {
        $db = Db::getConnection();
        $res = $db->query('SELECT * FROM product ');
        $res->setFetchMode(\PDO::FETCH_ASSOC);

        $items = $res->fetchAll();
        return $items;
    }

    public static function getById($id)
    {
        $id = intval($id);
        if ($id) {
            $db = Db::getConnection();
            $result = $db->query('SELECT * FROM product WHERE `id`=' . $id);

            /*$result->setFetchMode(PDO::FETCH_NUM);*/
            $result->setFetchMode(PDO::FETCH_ASSOC);

            $newsItem = $result->fetch();

            return $newsItem;
        }
    }
}