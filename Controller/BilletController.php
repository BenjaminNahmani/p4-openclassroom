<?php
namespace Blog\Controller;

use Blog\DAO\BilletDao;
use Blog\Framework\Controller;
use Blog\Model\Billet;
use Blog\Framework\View;
use Blog\Model\Commentaire;


class BilletController extends Controller
{


    public function create()
    {
        $this->redirectIfNotConnected();

        $error="";
        if(isset($_POST["submit"]))
        {
        
            if(!empty($_POST["name"]) && !empty($_POST["text"]))
            {
                BilletDao::create(strip_tags($_POST["name"]),preg_replace('#<script(.*?)>(.*?)</script>#is', '',$_POST["text"]));
                header("location:liste");
               exit;
            }

            $error="Veuillez remplir tout les champs";
        }

        $view = new View("billet/create");
        $view->render(["error"=>$error]);
    }

    public function delete()
    {
        $this->redirectIfNotConnected();

        if(isset($_GET["id"]))
        {
            echo BilletDao::delete($_GET["id"]);
        }

        header("location:liste");
    }

    public function liste()
    {
        $this->redirectIfNotConnected();

        $billets=BilletDao::liste();

        $view = new View("billet/liste");
        $view->render(["billets"=>$billets]);
    }

    public function update()
    {
        $this->redirectIfNotConnected();

        $error="";
        if(isset($_POST["submit"]))
        {
            if(!empty($_POST["name"]) && !empty($_POST["text"]))
            {

                $billet=new Billet($_POST["id"],$_POST["name"],$_POST["text"]);

                BilletDao::update($billet);
                header("location:liste");
                exit;
            }
            $error="Veuillez remplir tout les champs";
        }

        $billet=BilletDao::get($_GET["id"]);

        $view = new View("billet/update");
        $view->render(["billet"=>$billet,"error"=>$error]);
    }

    public function show(){
        $billet=BilletDao::get($_GET["id"], true);
        $view = new View("billet/show");
        $view->render(["billet"=>$billet]);

    }

    public function episodes(){
        $billet=BilletDao::liste();
        $view = new View("billet/episodes");
        $view->render(["billet"=>$billet]);

    }

    


}