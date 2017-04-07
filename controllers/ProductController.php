<?php


class ProductController
{
    public function actionView($id)
    {
        $categories = [];
        $categories = Category::getCategories();
        $product = Product::getProductById($id);
        $recomendedProducts = Product::getRecomended();
        require_once(ROOT . '/views/site/view.php');
        return true;
    }
}