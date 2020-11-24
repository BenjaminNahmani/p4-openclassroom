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
       
        //var_dump($_POST);
            $erreur="";

            if(empty($_POST["nom"]))
            {
                $erreur.=" Le nom est obligatoire";
            }

            if(empty($_POST["prenom"]))
            {
                $erreur.=" Le prenom est obligatoire";
            }

            if(empty($_POST["text"]))
            {
                $erreur.=" Le contenu du commentaire est obligatoire";
            }



            if($erreur=="")
            {
               $res= CommentaireDao::create(htmlspecialchars($_POST["nom"]),htmlspecialchars($_POST["prenom"]),htmlspecialchars($_POST["text"]),$_POST["billet"]);
                //var_dump($res);
            }
            header("location:/billet?id=".$_POST["billet"]."&error=".$erreur);
            exit;

        //include_once "vue/commentaire/create.php";
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

            if(!empty($_POST["text"]))
            {

                $com=new Commentaire($_POST["id"],$_POST["nom"],$_POST["prenom"],$_POST["text"],$_POST["billet"],0);

                CommentaireDao::update($com);
                header("location:liste?id=".$_POST["billet"]);
                exit;
            }
            $error="Veuillez remplir tout les champs";
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