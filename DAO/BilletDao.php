<?php

namespace Blog\DAO;

use Blog\Model\Billet;
use Blog\Model\Commentaire;


class BilletDao extends DAO{


    public static function create($name,$text)
    {
        $request=self::getCnx()->prepare("INSERT INTO `billet`( `name`, `text`, `date`) VALUES(?,?,?)");
       return $request->execute([$name,$text,date("Y-m-d")]);
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
        $request=self::getCnx()->prepare("SELECT * FROM billet ");
        $request->execute([]);
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
        $request=self::getCnx()->prepare("SELECT * FROM billet ");
        $request->execute([]);
        $result=$request->fetchAll();

        $billet=[];

        foreach ($result as $value)
        {
            $commentDao = new CommentaireDao();
            $billet[]=new Billet($value["id"],$value["name"],$value["text"],$commentDao->getCommentsFromBillet($value['id']));
        }

        return $billet;
    }

    public static function lastBillet()
    {
        $request=self::getCnx()->prepare("SELECT * FROM billet ORDER BY date DESC LIMIT 1");
        $request->execute([]);
        $result=$request->fetch();

        $billet=new Billet($result["id"],$result["name"],$result["text"],[]);

        return $billet;
    }

    public static function get($id, $withComs = false)
    {
        $request=self::getCnx()->prepare("SELECT * FROM billet WHERE id=?");
        $request->execute([$id]);
        $result=$request->fetch();

        $billet=new Billet($result["id"],$result["name"],$result["text"]);


        if($withComs){
        $commentDao = new CommentaireDao();
        $billet->setCommentaires($commentDao->getCommentsFromBillet($result['id']));

        }

        return $billet;
    }


}