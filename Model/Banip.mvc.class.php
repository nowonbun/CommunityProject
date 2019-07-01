<?php

class Banip
{

    private $idx;

    private $ipaddress;

    private $isdeleted;

    private $createddate;

    private $creater;

    private $updateddate;

    private $updater;

    public function getIdx()
    {
        return $this->idx;
    }

    public function getIpaddress()
    {
        return $this->ipaddress;
    }

    public function getIsdeleted()
    {
        return $this->isdeleted;
    }

    public function getCreateddate()
    {
        return $this->createddate;
    }

    public function getCreater()
    {
        return $this->creater;
    }

    public function getUpdateddate()
    {
        return $this->updateddate;
    }

    public function getUpdater()
    {
        return $this->updater;
    }

    public function setIdx($idx)
    {
        $this->idx = $idx;
    }

    public function setIpaddress($ipaddress)
    {
        $this->ipaddress = $ipaddress;
    }

    public function setIsdeleted($isdeleted)
    {
        $this->isdeleted = $isdeleted;
    }

    public function setCreateddate($createddate)
    {
        $this->createddate = $createddate;
    }

    public function setCreater($creater)
    {
        $this->creater = $creater;
    }

    public function setUpdateddate($updateddate)
    {
        $this->updateddate = $updateddate;
    }

    public function setUpdater($updater)
    {
        $this->updater = $updater;
    }
}
?>