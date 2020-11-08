<?php

namespace Blog\Controller;



use Blog\Framework\Controller;
use Blog\Framework\View;

class LoginController extends Controller
{


    public function login()
    {

        if ($this->isConnected()){
            header("Location: /admin/billet/liste");
            exit;
        }

        if(isset($_POST["submit"]))
        {

            if($_POST["password"]=="1234")
            {
                $_SESSION["admin"]=true;
                header("location:/admin/billet/liste");
                exit;

            }else
            {
                $error=true;
            }

        }
        $view = new View("login/form");
        $view->render([]);
    }

    public function logout()
    {
        session_destroy();

        header("Location: /home");
        exit;
    }



}