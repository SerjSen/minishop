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

    public static function getCategoriesListAdmin()
    {

        $db = DB::getConnection();

        $result = $db->query('SELECT id,name, sort_order,status FROM category ORDER BY sort_order ASC ');

        $categoryList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $categoryList[$i]['id'] = $row['id'];
            $categoryList[$i]['name'] = $row['name'];
            $categoryList[$i]['sort_order'] = $row['sort_order'];
            $categoryList[$i]['status'] = $row['status'];
            $i++;
        }

        return $categoryList;
    }

    /**
     * Возвращает текстое пояснение статуса для категории :<br/>
     * <i>0 - Скрыта, 1 - Отображается</i>
     * @param integer $status <p>Статус</p>
     * @return string <p>Текстовое пояснение</p>
     */
    public static function getStatusText($status)
    {
        switch ($status) {
            case '1':
                return 'Отображается';
                break;
            case '0':
                return 'Скрыта';
                break;
        }
    }
}