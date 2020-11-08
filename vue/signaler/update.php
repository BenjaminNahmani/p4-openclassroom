<?php

include_once "../../Utils/utils.php";
include_once "../../DAO/CommentaireDao.php";

$this->redirectIfNotConnected();

if(isset($_POST["submit"]))
{

    $com=new Commentaire($_POST["id"],$_POST["text"],$_POST["billet"],0);

    CommentaireDao::update($com);
    header("location:liste.php");
    exit;
}

$com=CommentaireDao::get($_GET["id"]);


include_once "layout/update.php";
