<?php

namespace Blog\Model;

class Commentaire{

    private $id;
    private $nom;
    private $prenom;
    private $text;
    private $billet;
    private $signaler;

    public function __construct($id,$nom,$prenom,$text,$billet,$signaler)
    {
        $this->id=$id;
        $this->text=$text;
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->billet=$billet;
        $this->signaler=$signaler;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $text
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $text
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getBillet()
    {
        return $this->billet;
    }

    /**
     * @param mixed $billet
     */
    public function setBillet($billet)
    {
        $this->billet = $billet;
    }

    /**
     * @return mixed
     */
    public function getSignaler()
    {
        return $this->signaler;
    }

    /**
     * @param mixed $signaler
     */
    public function setSignaler($signaler)
    {
        $this->signaler = $signaler;
    }


}