<?php

class CommentDao extends AbstractDao
{

    protected function getClass()
    {
        return "Comment";
    }

    public function select()
    {
        return parent::transaction("SELECT * FROM Comment");
    }
}
?>