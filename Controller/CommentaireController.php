<?php

namespace Blog\Controller;

use Blog\DAO\BilletDao;
use Blog\DAO\CommentaireDao;
use Blog\Framework\Controller;
use Blog\Model\Commentaire;


class CommentaireController extends Controller
{


    public function create()
    {
        $this->redirectIfNotConnected();

        if(isset($_POST["submit"]))
        {

            CommentaireDao::create(strip_tags($_POST["text"]),$_POST["billet"]);
            header("location:liste?id=".$_POST["billet"]);
            exit;
        }

        include_once "vue/commentaire/create.php";
    }



    public function liste()
    {
        $this->redirectIfNotConnected();


        if(!isset($_GET["id"]))
        {
            header("location:/admin/billet/liste");
            exit;
        }

        $billet=BilletDao::get($_GET["id"]);
        $coms=CommentaireDao::liste($_GET["id"]);


        include_once "vue/commentaire/liste.php";
    }


    public function update()
    {
        $this->redirectIfNotConnected();

        if(isset($_POST["submit"]))
        {

            $com=new Commentaire($_POST["id"],$_POST["text"],$_POST["billet"],0);

            CommentaireDao::update($com);
            header("location:liste?id=".$_POST["billet"]);
            exit;
        }

        $com=CommentaireDao::get($_GET["id"]);


        include_once "vue/commentaire/update.php";
    }

    public function delete()
    {
        $this->redirectIfNotConnected();

        if(isset($_GET["id"]))
        {
            echo CommentaireDao::delete($_GET["id"]);
        }

        header("location:liste?id=".$_GET["billet"]);
    }


    public function signaler($id)
    {
        return CommentaireDao::signal($id);
    }

    public function listeSignaler()
    {
        $this->redirectIfNotConnected();


        $coms=CommentaireDao::listeSignal();


        include_once "vue/signaler/liste.php";
    }





}