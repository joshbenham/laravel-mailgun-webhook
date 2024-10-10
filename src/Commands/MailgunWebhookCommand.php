<?php

namespace JoshBenham\MailgunWebhook\Commands;

use Illuminate\Console\Command;

class MailgunWebhookCommand extends Command
{
    public $signature = 'laravel-mailgun-webhook';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
