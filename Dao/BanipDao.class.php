<?php

class BanipDao extends AbstractDao
{

    protected function getClass()
    {
        return "Banip";
    }

    public function select()
    {
        return parent::transaction("SELECT * FROM Banip");
    }
}
?>