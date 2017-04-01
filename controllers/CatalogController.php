<?php

/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 31.03.17
 * Time: 14:39
 */
class CatalogController
{
    public function actionIndex()
    {
        $categories = [];
        $categories = Category::getCategories();
        $latestProducts = [];
        $latestProducts = Product::getLatestProducts(12);
        require_once(ROOT . '/views/catalog/index.php');


        return true;
    }

    public function actionCategory($categoryId)
    {
        $categories = array();
        $categories = Category::getCategories();

        $categoryProducts = array();
        $categoryProducts = Product::getProductsListByCategory($categoryId);

        require_once(ROOT . '/views/catalog/category.php');

        return true;
    }
}