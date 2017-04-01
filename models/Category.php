<?php

/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 31.03.17
 * Time: 12:37
 */
class Category
{
    public static function getCategories()
    {
        $db = Db::getConnection();

        $categories = [];

        $res = $db->query('SELECT id, name FROM category ORDER  BY sort_order ASC ');

        $i = 0;
        while ($row = $res->fetch()) {
            $categories[$i]['id'] = $row['id'];
            $categories[$i]['name'] = $row['name'];
            $i++;
        }
        return $categories;
    }

}