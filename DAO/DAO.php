<?php


namespace Blog\DAO;


class DAO
{


    public static function getCnx()
    {
        $cnx = new \PDO("mysql:host=localhost;dbname=p4-openclassroom;charset=UTF8", "root", "root");
        return $cnx;
    }
}