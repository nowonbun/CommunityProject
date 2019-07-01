<?php

class BoardType
{

    private $code;

    private $name;

    private $isactive;

    public function getCode()
    {
        return $this->code;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getIsactive()
    {
        return $this->isactive;
    }

    public function setCode($code)
    {
        $this->code = $code;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setIsactive($isactive)
    {
        $this->isactive = $isactive;
    }
}
?>