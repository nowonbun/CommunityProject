<?php

class GroupTypeDao extends AbstractDao
{

    protected function getClass()
    {
        return "GroupType";
    }

    public function select()
    {
        return parent::transaction("SELECT * FROM GroupType");
    }
}
?>