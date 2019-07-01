<?php

class Comment
{

    private $idx;

    private $boardidx;

    private $parentcommentidx;

    private $contents;

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

    public function getParentcommentidx()
    {
        return $this->parentcommentidx;
    }

    public function getContents()
    {
        return $this->contents;
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

    public function setParentcommentidx($parentcommentidx)
    {
        $this->parentcommentidx = $parentcommentidx;
    }

    public function setContents($contents)
    {
        $this->contents = $contents;
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