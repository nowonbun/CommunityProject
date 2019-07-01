<?php

class AttachmentTypeDao extends AbstractDao
{

    protected function getClass()
    {
        return "AttachmentType";
    }

    public function select()
    {
        return parent::transaction("SELECT * FROM AttachmentType");
    }
}
?>