<?php
namespace Blog\Controller;

use Blog\DAO\BilletDao;
use Blog\Framework\Controller;
use Blog\Model\Billet;
use Blog\Framework\View;


class BilletController extends Controller
{


    public function create()
    {
        $this->redirectIfNotConnected();

        if(isset($_POST["submit"]))
        {

            BilletDao::create($_POST["name"],$_POST["text"]);
            header("location:liste");
            exit;
        }

        $view = new View("billet/create");
        $view->render();
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

        if(isset($_POST["submit"]))
        {

            $billet=new Billet($_POST["id"],$_POST["name"],$_POST["text"]);

            BilletDao::update($billet);
            header("location:liste");
            exit;
        }

        $billet=BilletDao::get($_GET["id"]);

        $view = new View("billet/update");
        $view->render(["billet"=>$billet]);
    }



}