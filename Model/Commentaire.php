<?php

namespace Blog\Model;

class Commentaire{

    private $id;
    private $text;
    private $billet;
    private $signaler;

    public function __construct($id,$text,$billet,$signaler)
    {
        $this->id=$id;
        $this->text=$text;
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