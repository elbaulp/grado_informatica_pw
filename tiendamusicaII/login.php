<?php
/**
 * Copyright 2016 Alejandro Alcalde
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

require_once("inc/utils.php");
require_once('db/User.php');
require_once('lib/password.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    $login_fail = true;

    if (isset($_POST["logout"])) {
        $_SESSION = array();
        session_destroy();
        header("Location: index.php");
    } else {
        $user = new User(array(":nombreUsuario" => test_input($_POST["username"])));
        if (($loginResult = $user->getUser()) != false) {

            $realHash = $loginResult["contrasena"];

            if (password_verify(test_input($_POST["password"]), $realHash)) {
                session_start([
                    'cookie_lifetime' => 86400 * 7, // Session lasts for 7 days
                ]);
                $_SESSION['logged_user'] = $loginResult["nombreUsuario"];
                $_SESSION['logged_user_id'] = $loginResult["dni"];
                $_SESSION['is_admin'] = $loginResult["rol"] == "admin" ? true : false;
                header("Location: " . $_SERVER['HTTP_REFERER']);
                $login_fail = false;
            }
        }
        if ($login_fail) {
            $_SESSION['incorrect_password'] = "Usuario o contraseña incorrectos";
            header("Location: " . $_SERVER['HTTP_REFERER']);
        }
    }
}
?>
