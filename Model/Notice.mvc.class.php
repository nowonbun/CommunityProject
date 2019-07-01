<?php

class Notice
{

    private $idx;

    private $boardidx;

    private $cookiekey;

    private $startdate;

    private $enddate;

    private $isdeleted;

    private $createddate;

    private $creater;

    private $updateddate;

    private $updater;

    public function getIdx()
    {
        return $this->idx;
    }

    public function getBoardidx()
    {
        return $this->boardidx;
    }

    public function getCookiekey()
    {
        return $this->cookiekey;
    }

    public function getStartdate()
    {
        return $this->startdate;
    }

    public function getEnddate()
    {
        return $this->enddate;
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

    public function setBoardidx($boardidx)
    {
        $this->boardidx = $boardidx;
    }

    public function setCookiekey($cookiekey)
    {
        $this->cookiekey = $cookiekey;
    }

    public function setStartdate($startdate)
    {
        $this->startdate = $startdate;
    }

    public function setEnddate($enddate)
    {
        $this->enddate = $enddate;
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