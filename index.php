<?php
namespace Blog;

session_start();
include "autoload.php";

use Blog\Controller\BilletController;
use Blog\Controller\HomeController;
use Blog\Controller\CommentaireController;
use Blog\Controller\LoginController;


//var_dump($_SERVER);

$path="/";


if(isset($_SERVER["REDIRECT_URL"]))
{
    $path=$_SERVER["REDIRECT_URL"];
}




switch ($path)
{
    //HOME
    case "/home":

        $controller=new HomeController();
        $controller->index();
        break;
    case "/":
        header("location:/home");
        exit;
        break;



    //Billet
    case "/admin/billet/create":
        $controller=new BilletController();
        $controller->create();
        break;
    case "/admin/billet/liste":
        $controller=new BilletController();
        $controller->liste();
        break;
    case "/admin/billet/update":
        $controller=new BilletController();
        $controller->update();
        break;
    case "/admin/billet/delete":
        $controller=new BilletController();
        $controller->delete();
        break;

        //Commentaire
    case "/admin/commentaire/create":
        $controller=new CommentaireController();
        $controller->create();
        break;
    case "/admin/commentaire/liste":
        $controller=new CommentaireController();
        $controller->liste();
        break;
    case "/admin/commentaire/update":
        $controller=new CommentaireController();
        $controller->update();
        break;
    case "/admin/commentaire/delete":
        $controller=new CommentaireController();
        $controller->delete();
        break;
    case "/signal":
        $controller=new CommentaireController();
        echo $controller->signaler($_GET["id"]);
        break;
    case "/admin/signaler/liste":
        $controller=new CommentaireController();
        echo $controller->listeSignaler();
        break;



        //LOGIN
    case "/admin/logout/":
        $controller=new LoginController();
        $controller->logout();
        break;
    case "/admin/login/":
        $controller=new LoginController();
        $controller->login();
        break;



    default:
        include_once $path;
    break;

}



