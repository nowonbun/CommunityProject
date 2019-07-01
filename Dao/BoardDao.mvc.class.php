<?php

class BoardDao extends AbstractDao
{

    protected function getClass()
    {
        return "Board";
    }

    public function select()
    {
        return parent::transaction("SELECT * FROM Board");
    }
}
?>