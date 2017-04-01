<?php


class ProductController
{
    public function actionView($id)
    {
        $categories = [];
        $categories = Category::getCategories();
        $product = Product::getProductById($id);
        require_once(ROOT.'/views/site/view.php');
        return true;
    }
}