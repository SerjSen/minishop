<?php

class SiteController
{
    public function actionIndex()
    {
        $categories = [];
        $categories = Category::getCategories();
        $latestProducts = [];
        $latestProducts = Product::getLatestProducts(6);
        require_once(ROOT.'/views/site/index.php');


        return true;
    }
    public function actionContact() {

        $userEmail = '';
        $userText = '';
        $result = false;

        if (isset($_POST['submit'] )) {
            $userEmail = $_POST['email'];
            $userText = $_POST['text'];

            $errors = false;

            if (!User::checkEmail($userEmail)) {
                $errors[] = 'Неправильный email';
            }

            if ($errors == false) {

                $adminMail = 'henrick84@mail.ru';
                $subject = 'Тема письма';
                $message = 'Текст: {$userText}. От {$userEmail}.';
                $result = mail($adminMail, $subject, $message);
                $result = true;
            }

        }
        require_once(ROOT . '/views/site/contacts.php');

        return true;
    }
}