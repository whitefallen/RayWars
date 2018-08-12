<?php

namespace App\Entity;

class Card
{
    private $id;

    private $name;

    private $type;

    private $cost;

    private $hp;

    private $cardtag;

    private $effect;

    public function getId()
    {
        return $this->id;
    }

    public function setId($_id)
    {
        $this->id = $_id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($_name)
    {
        $this->name = $_name;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($_type)
    {
        $this->type = $_type;
    }

    public function getCost()
    {
        return $this->cost;
    }

    public function setCost($_cost)
    {
        $this->cost = $_cost;
    }

    public function getHp()
    {
        return $this->hp;
    }

    public function setHp($_hp)
    {
        $this->hp = $_hp;
    }

    public function getCardtag()
    {
        return $this->cardtag;
    }

    public function setCardtag($_cardtag)
    {
        $this->cardtag = $_cardtag;
    }

    public function getEffect()
    {
        return $this->effect;
    }

    public function setEffect($_effect)
    {
        $this->effect = $_effect;
    }

}
