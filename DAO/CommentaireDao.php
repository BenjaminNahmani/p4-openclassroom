<?php
namespace Blog\DAO;

use Blog\Model\Commentaire;

class CommentaireDao extends DAO {


    public static function create($text,$billet)
    {
        $request=self::getCnx()->prepare("INSERT INTO `commentaire`(`text`, `billet`) VALUES(?,?)");
        return $request->execute([$text,$billet]);
    }

    public static function update($commentaire)
    {

        $request=self::getCnx()->prepare("UPDATE commentaire SET text=?, billet=?,signaler=? WHERE id=?");
        return $request->execute([$commentaire->getText(),$commentaire->getBillet(),$commentaire->getSignaler(),$commentaire->getId()]);
    }

    public static function delete($id)
    {
        $request=self::getCnx()->prepare("DELETE FROM commentaire WHERE id=?");
        return $request->execute([$id]);
    }

    public static function liste($idBillet)
    {
        $request=self::getCnx()->prepare("SELECT * FROM commentaire WHERE billet=?");
        $request->execute([$idBillet]);
        $result=$request->fetchAll();

        $commentaire=[];

        foreach ($result as $value)
        {
            $commentaire[]=new Commentaire($value["id"],$value["text"],$value["billet"],$value["signaler"]);
        }

        return $commentaire;
    }

    public static function listeSignal()
    {
        $request=self::getCnx()->prepare("SELECT * FROM commentaire WHERE signaler=1 ORDER BY dateSignaler DESC ");
        $request->execute();
        $result=$request->fetchAll();

        $commentaire=[];

        foreach ($result as $value)
        {
            $request=self::getCnx()->prepare("SELECT * FROM billet WHERE id=".$value["billet"]);
            $request->execute();
            $result=$request->fetch();

            $billet=new Billet($result["id"],$result["name"],$result["text"]);



            $commentaire[]=new Commentaire($value["id"],$value["text"],$billet,$value["signaler"]);
        }

        return $commentaire;
    }

    public static function get($id)
    {
        $request=self::getCnx()->prepare("SELECT * FROM commentaire WHERE id=?");
        $request->execute([$id]);
        $result=$request->fetch();

        $commentaire=new Commentaire($result["id"],$result["text"],$result["billet"],$result["signaler"]);

        return $commentaire;
    }

    public static function signal($id)
    {

        $request=self::getCnx()->prepare("UPDATE commentaire SET signaler=1,dateSignaler='".date("Y-m-d H:i:s")."' WHERE id=?");
        return $request->execute([$id]);
    }
    //Utiliser requete préparer (fail de sécurité ici)
    public function getCommentsFromBillet($id)
    {
        $request=self::getCnx()->query("SELECT * FROM commentaire WHERE billet=".$id);

        $result=$request->fetchAll();

        $commentaires=[];

        foreach ($result as $value2)
        {
            $commentaires[]=new Commentaire($value2["id"],$value2["text"],$value2["billet"],$value2["signaler"]);
        }
        return $commentaires;
    }



}