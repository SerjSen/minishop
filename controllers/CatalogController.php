<?php

/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 31.03.17
 * Time: 14:39
 */
include_once ROOT. '/components/Pagination.php';
class CatalogController
{
    public function actionIndex()
    {
        $categories = [];
        $categories = Category::getCategories();
        $latestProducts = [];
        $latestProducts = Product::getLatestProducts();
        require_once(ROOT . '/views/catalog/index.php');


        return true;
    }

    public function actionCategory($categoryId, $page=1)
    {
        $categories = [];
        $categories = Category::getCategories();

        $categoryProducts = [];
        $categoryProducts = Product::getProductsListByCategory($categoryId, $page);
        $total = Product::getTotalProductsInCategory($categoryId);
        $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');
        require_once(ROOT . '/views/catalog/category.php');

        return true;
    }
}