<?php

namespace JoshBenham\MailgunWebhook\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \JoshBenham\MailgunWebhook\MailgunWebhook
 */
class MailgunWebhook extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \JoshBenham\MailgunWebhook\MailgunWebhook::class;
    }
}
