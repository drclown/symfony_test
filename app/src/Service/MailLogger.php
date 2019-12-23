<?php
// src/Services/MailLogger
namespace App\Service;

class MailLogger
{
    private $adminEmail;

    public function __construct($adminEmail)
    {
        $this->adminEmail = $adminEmail;
    }

    public function sendMail()
    {
        return sprintf('email send huhu to %s', $this->adminEmail);
    }
}