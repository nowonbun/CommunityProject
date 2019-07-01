<?php

class Board
{

    private $idx;

    private $boardcategory;

    private $parentboardidx;

    private $title;

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

    public function getBoardcategory()
    {
        return $this->boardcategory;
    }

    public function getParentboardidx()
    {
        return $this->parentboardidx;
    }

    public function getTitle()
    {
        return $this->title;
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

    public function setBoardcategory($boardcategory)
    {
        $this->boardcategory = $boardcategory;
    }

    public function setParentboardidx($parentboardidx)
    {
        $this->parentboardidx = $parentboardidx;
    }

    public function setTitle($title)
    {
        $this->title = $title;
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