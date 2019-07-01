<?php

class BoardTypeDao extends AbstractDao
{

    protected function getClass()
    {
        return "BoardType";
    }

    public function select()
    {
        return parent::transaction("SELECT * FROM BoardType");
    }
}
?>