<?php

class BoardCategoryDao extends AbstractDao
{

    protected function getClass()
    {
        return "BoardCategory";
    }

    public function select()
    {
        return parent::transaction("SELECT * FROM BoardCategory");
    }
}
?>