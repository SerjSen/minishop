<?php

/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 29.05.16
 * Time: 15:22
 */
class CabinetController {
    public function actionIndex(){

        $userId = User::checkLogged();

        $user = User::getUserById($userId);
       /* $user = User::getUserById($userId);*/

        require_once (ROOT.'/views/cabinet/index.php');
        return true;
    }

    public function actionEdit(){
        $userId = User::checkLogged();
        $user = User::getUserById($userId);

        $name = $user['name'];
        $password = $user['password'];

        $result = false;


        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $password = $_POST['password'];

            $errors = false;


            if (!User::checkName($name)) {
                $errors[] = 'Имя должно содержать минимум 3 символа';
            }

            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }

            if( $errors  == false){
            $result = User::edit($userId, $name, $password);
            }
        }

        require_once (ROOT.'/views/cabinet/edit.php');
        return true;
    }
}