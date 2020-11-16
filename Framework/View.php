<?php
namespace Blog\Framework;

class View
{
    private $path;

    public function __construct($path)
    {
        $this->path=$path;
    }

    public function render($data=[])
    {
        $path=$this->path;
        extract($data);
        $header=file_get_contents($_SERVER["DOCUMENT_ROOT"]."vue/layout/header.php");
        $footer=file_get_contents($_SERVER["DOCUMENT_ROOT"]."vue/layout/footer.php");

        $headerAdmin=file_get_contents($_SERVER["DOCUMENT_ROOT"]."vue/menu/menu.php");

        include_once $_SERVER["DOCUMENT_ROOT"]."vue/".$path.".php";
    }
}