<?php

class Mail
{

    private $idx;

    private $memberid;

    private $contents;

    private $createddate;

    public function getIdx()
    {
        return $this->idx;
    }

    public function getMemberid()
    {
        return $this->memberid;
    }

    public function getContents()
    {
        return $this->contents;
    }

    public function getCreateddate()
    {
        return $this->createddate;
    }

    public function setIdx($idx)
    {
        $this->idx = $idx;
    }

    public function setMemberid($memberid)
    {
        $this->memberid = $memberid;
    }

    public function setContents($contents)
    {
        $this->contents = $contents;
    }

    public function setCreateddate($createddate)
    {
        $this->createddate = $createddate;
    }
}
?>