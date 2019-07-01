<?php

class MemberDao extends AbstractDao
{

    protected function getClass()
    {
        return "Member";
    }

    public function select()
    {
        return parent::transaction("SELECT * FROM Member");
    }
}
?>