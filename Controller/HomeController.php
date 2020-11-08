<?php
namespace Blog\Controller;

use Blog\DAO\BilletDao;
use Blog\Framework\Controller;
use Blog\Framework\View;

class HomeController extends Controller
{

    public function index(){

        $billets = BilletDao::listeAndCom();

        $view = new View("home/home");
        $view->render(["billets"=>$billets]);
    }


}