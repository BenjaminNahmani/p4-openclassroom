<?php

namespace Blog\DAO;

use Blog\Model\Billet;
use Blog\Model\Commentaire;


class BilletDao extends DAO{


    public static function create($name,$text)
    {
        $request=self::getCnx()->prepare("INSERT INTO `billet`( `name`, `text`) VALUES(?,?)");
        return $request->execute([$name,$text]);
    }

    public static function update($billet)
    {

        $request=self::getCnx()->prepare("UPDATE billet SET name=?, text=? WHERE id=?");
        return $request->execute([$billet->getName(),$billet->getText(),$billet->getId()]);
    }

    public static function delete($id)
    {
        $request=self::getCnx()->prepare("DELETE FROM commentaire WHERE billet=?");
        $request->execute([$id]);

        $request=self::getCnx()->prepare("DELETE FROM billet WHERE id=?");
        return $request->execute([$id]);
    }

    public static function liste()
    {
        $request=self::getCnx()->query("SELECT * FROM billet ");

        $result=$request->fetchAll();

        $billet=[];

        foreach ($result as $value)
        {
            $billet[]=new Billet($value["id"],$value["name"],$value["text"]);
        }

        return $billet;
    }

    public static function listeAndCom()
    {
        $request=self::getCnx()->query("SELECT * FROM billet ");

        $result=$request->fetchAll();

        $billet=[];

        foreach ($result as $value)
        {
            $request=self::getCnx()->query("SELECT * FROM commentaire WHERE billet= ".$value["id"]);

            $result=$request->fetchAll();

            $commentaires=[];

            foreach ($result as $value2)
            {
                $commentaires[]=new Commentaire($value2["id"],$value2["text"],$value2["billet"],$value2["signaler"]);
            }

            $billet[]=new Billet($value["id"],$value["name"],$value["text"],$commentaires);
        }

        return $billet;
    }

    public static function get($id)
    {
        $request=self::getCnx()->prepare("SELECT * FROM billet WHERE id=?");
        $request->execute([$id]);
        $result=$request->fetch();

        $billet=new Billet($result["id"],$result["name"],$result["text"]);

        return $billet;
    }

}