<?php

class Member
{

    private $id;

    private $email;

    private $nickname;

    private $groupcode;

    private $isban;

    private $createddate;

    private $updateddate;

    public function getId()
    {
        return $this->id;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getNickname()
    {
        return $this->nickname;
    }

    public function getGroupcode()
    {
        return $this->groupcode;
    }

    public function getIsban()
    {
        return $this->isban;
    }

    public function getCreateddate()
    {
        return $this->createddate;
    }

    public function getUpdateddate()
    {
        return $this->updateddate;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setNickname($nickname)
    {
        $this->nickname = $nickname;
    }

    public function setGroupcode($groupcode)
    {
        $this->groupcode = $groupcode;
    }

    public function setIsban($isban)
    {
        $this->isban = $isban;
    }

    public function setCreateddate($createddate)
    {
        $this->createddate = $createddate;
    }

    public function setUpdateddate($updateddate)
    {
        $this->updateddate = $updateddate;
    }
}
?>