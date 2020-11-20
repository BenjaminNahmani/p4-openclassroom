<?php

namespace Blog\Controller;



use Blog\Framework\Controller;
use Blog\Framework\View;
use Blog\DAO\LoginDao;

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
            $id=LoginDao::login($_POST["user"],$_POST["pwd"]);

            if($id)
            {
                $_SESSION["admin"]=$id;
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

        header("Location: /");
        exit;
    }



}