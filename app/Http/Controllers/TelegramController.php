<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Telegram\Bot\Laravel\Facades\Telegram;
use WeStacks\TeleBot\TeleBot;

class TelegramController extends Controller
{

//+++++++++++++++++++++++++++++++++++++++
//Webhook URL List 
//+++++++++++++++++++++++++++++++++++++++
// 1. https://api.telegram.org/bot<Your-token>/getUpdates
// 2. https://api.telegram.org/bot<Your-token>/setWebhook?url=https://www.yourdomain.com/telegram-message-webhook
// 3. https://api.telegram.org/bot<Your-token>/getWebhookInfo
// 4. https://api.telegram.org/bot<Your-token>/deleteWebhook
// //+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// URL For The Package: https://github.com/westacks/telebot
// Document URL: https://core.telegram.org/bots/api#sendphoto
// Bot API Library Examples :https://core.telegram.org/bots/samples


    public function webhook()
    {
        $update = Telegram::getWebhookUpdates();

        // Process the update (e.g., command, message, etc.)
        if ($update->isType('message')) {
            $chatId = $update->getMessage()->getChat()->getId();
            $text = $update->getMessage()->getText();
            // $userRole = $this->determineRole($chatId); // Define logic for role

            // Respond to the user
            Telegram::sendMessage([
                'chat_id' => $chatId,
                'text' => "You said: $text",
            ]);

            // TelegramUser::updateOrCreate(
            //     ['telegram_id' => $chatId],
            //     ['role' => $userRole]
            // );
        }

        return response()->json(['status' => 'ok']);
    }

}