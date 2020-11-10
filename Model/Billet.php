<?php

namespace Blog\Model;

class Billet{

    private $id;
    private $name;
    private $text;
    private $commentaires;

    public function __construct($id,$name,$text,$commentaires=[])
    {
        $this->id=$id;
        $this->name=$name;
        $this->text=$text;
        $this->commentaires=$commentaires;
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
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

    public function getCommentaires()
    {
        return $this->commentaires;
    }

    public function setCommentaires(array $commentaires)
    {
        $this->commentaires = $commentaires;
    }
}