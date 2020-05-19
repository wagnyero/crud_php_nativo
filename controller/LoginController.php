<?php

class LoginController
{
    public function __construct()
    {
        session_start();
        if(isset($_SESSION["login-active"])) {
            return header("Location: ../view/list.php");
        } 

        return $this->login();
    }

    public function login()
    {
        if(isset($_POST["txtLogin"]) && isset($_POST["txtPassword"]) ) {
            if($_POST["txtLogin"] === "admin" && $_POST["txtPassword"] == "12345") {
                $_SESSION["login-active"] = true;

                return header("Location: ../view/list.php");
            }
        }
        
        return false;
    }
}

$loginController = new LoginController();