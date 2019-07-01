<?php

class SourceType
{

    private $code;

    private $name;

    private $classtype;

    private $isactive;

    public function getCode()
    {
        return $this->code;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getClasstype()
    {
        return $this->classtype;
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

    public function setClasstype($classtype)
    {
        $this->classtype = $classtype;
    }

    public function setIsactive($isactive)
    {
        $this->isactive = $isactive;
    }
}
?>