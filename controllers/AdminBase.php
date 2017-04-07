<?php

/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 01.06.16
 * Time: 9:22
 */
abstract class AdminBase {

    public static function checkAdmin(){
        $userId = User::checkLogged();


        $user = User::getUserById($userId);

        if($user['role'] == 'admin'){
            return true;
        }

        die('У вас нет прав администратора');
    }

}