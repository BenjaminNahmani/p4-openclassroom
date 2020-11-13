<?php


namespace Blog\Framework;


class Controller
{
    public function redirectIfNotConnected()
    {
        if(!isset($_SESSION["admin"]))
        {
            header("Location: /admin/login/");
            exit;
        }
    }

    public function isConnected()
    {
        return isset($_SESSION["admin"]);
    }


}