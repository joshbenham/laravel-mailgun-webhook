<?php

namespace JoshBenham\MailgunWebhook;

use JoshBenham\MailgunWebhook\Commands\MailgunWebhookCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class MailgunWebhookServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-mailgun-webhook')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_mailgun_webhook_table')
            ->hasCommand(MailgunWebhookCommand::class);
    }
}
