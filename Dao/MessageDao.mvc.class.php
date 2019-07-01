<?php
//TODO: This
class AttachmentDao extends AbstractDao
{

    protected function getClass()
    {
        return "Attachment";
    }

    public function select()
    {
        return parent::transaction("SELECT * FROM Attachment");
    }
}
?>