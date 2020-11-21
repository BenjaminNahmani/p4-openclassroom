<?php
namespace Blog\Controller;

use Blog\DAO\BilletDao;
use Blog\DAO\CommentaireDao;
use Blog\Framework\Controller;
use Blog\Framework\View;

class HomeController extends Controller
{

    public function index(){

        $billet = BilletDao::lastBillet();

        $view = new View("home/home");
        $view->render(["billet"=>$billet]);
    }

}