<?php

class AttachmentType
{

    private $code;

    private $name;

    private $contenttype;

    private $isactive;

    public function getCode()
    {
        return $this->code;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getContenttype()
    {
        return $this->contenttype;
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

    public function setContenttype($contenttype)
    {
        $this->contenttype = $contenttype;
    }

    public function setIsactive($isactive)
    {
        $this->isactive = $isactive;
    }
}
?>