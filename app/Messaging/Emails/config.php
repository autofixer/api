<?php
/**
 * Configuration for sending out emails
 */
return [
    'default' => 'Messaging\Emails\Handlers\SymfonyMailer',
    'dsn' => 'smtp://{user}:{pass}@{host}:{port}',
    'host' => 'mail.autofixer.com.ng',
    'port' => 465,
    'user' => 'admin@autofixer.com.ng',
    'pass' => 'AUTOFIXERP@SSWORD'
];