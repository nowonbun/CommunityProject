<?php

class Message
{

    private $idx;

    private $sendid;

    private $receiveid;

    private $ischecked;

    private $isdeleted;

    private $createddate;

    private $creater;

    private $updateddate;

    private $updater;

    public function getIdx()
    {
        return $this->idx;
    }

    public function getSendid()
    {
        return $this->sendid;
    }

    public function getReceiveid()
    {
        return $this->receiveid;
    }

    public function getIschecked()
    {
        return $this->ischecked;
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

    public function setSendid($sendid)
    {
        $this->sendid = $sendid;
    }

    public function setReceiveid($receiveid)
    {
        $this->receiveid = $receiveid;
    }

    public function setIschecked($ischecked)
    {
        $this->ischecked = $ischecked;
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