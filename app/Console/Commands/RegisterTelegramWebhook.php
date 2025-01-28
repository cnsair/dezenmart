<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Telegram\Bot\Laravel\Facades\Telegram;

class RegisterTelegramWebhook extends Command
{
    protected $signature = 'telegram:register-webhook';
    protected $description = 'DezenMart is shaping the future of eCommerce';

    public function handle()
    {
        $url = 'https://dezenmart.com/telegram/webhook'; 
        Telegram::setWebhook(['url' => $url]);

        $this->info("Webhook registered successfully at $url");
    }
}
