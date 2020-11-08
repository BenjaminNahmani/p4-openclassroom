<?php

include_once "../../Utils/utils.php";
include_once "../../DAO/CommentaireDao.php";

$this->redirectIfNotConnected();

if(isset($_GET["id"]))
{
    echo CommentaireDao::delete($_GET["id"]);
}

header("location:liste.php");
