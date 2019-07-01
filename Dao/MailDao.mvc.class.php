<?php

class MailDao extends AbstractDao
{

    protected function getClass()
    {
        return "Mail";
    }

    public function select()
    {
        return parent::transaction("SELECT * FROM Mail");
    }
}
?>