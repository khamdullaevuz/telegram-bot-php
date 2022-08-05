<?php

/**
 * @author Elbek Khamdullaev (https://khamdullaev.uz)
 * @license MIT
 * @privacy Mualliflik huquqini hurmat qiling
 */

namespace Khamdullaevuz;

class Method
{
    public function sendMessage($chat_id, $datas = [])
    {
        return Telegram::Request(
            'sendMessage',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public function getMe()
    {
        return Telegram::Request('getme');
    }

    public function sendPhoto($chat_id, $datas = [])
    {
        return Telegram::Request(
            'sendPhoto',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public function sendAudio($chat_id, $datas = [])
    {
        return Telegram::Request(
            'sendAudio',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public function sendVideo($chat_id, $datas = [])
    {
        return Telegram::Request(
            'sendVideo',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public function sendAction($chat_id, $action)
    {
        return Telegram::Request('sendChatAction', [
            'chat_id' => $chat_id,
            'action' => $action
        ]);
    }

    public function sendDocument($chat_id, $datas = [])
    {
        return Telegram::Request(
            'sendDocument',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public function sendAnimation($chat_id, $datas = [])
    {
        return Telegram::Request(
            'sendAnimation',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public function sendVoice($chat_id, $datas = [])
    {
        return Telegram::Request(
            'sendVoice',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public function sendVideoNote($chat_id, $datas = [])
    {
        return Telegram::Request(
            'sendVideoNote',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public function sendMediaGroup($chat_id, $datas = [])
    {
        return Telegram::Request(
            'sendMediaGroup',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public function sendLocation($chat_id, $datas = [])
    {
        return Telegram::Request(
            'sendLocation',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public function sendVenue($chat_id, $datas = [])
    {
        return Telegram::Request(
            'sendVenue',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public function sendContact($chat_id, $datas = [])
    {
        return Telegram::Request(
            'sendContact',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public function sendPoll($chat_id, $datas = [])
    {
        return Telegram::Request(
            'sendPoll',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public function sendDice($chat_id, $datas = [])
    {
        return Telegram::Request(
            'sendDice',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public function copyMessage($chat_id, $datas = [])
    {
        return Telegram::Request(
            'copyMessage',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public function forwardMessage($chat_id, $from_chat_id, $message_id)
    {
        return Telegram::Request('forwardMessage', [
            'chat_id' => $chat_id,
            'from_chat_id' => $from_chat_id,
            'message_id' => $message_id
        ]);
    }

    public function deleteMessage($chat_id, $message_id)
    {
        return Telegram::Request('deleteMessage', [
            'chat_id' => $chat_id,
            'message_id' => $message_id
        ]);
    }

    public function editMessageText($chat_id, $datas = [])
    {
        return Telegram::Request(
            'editMessageText',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public function editMessageCaption($chat_id, $datas = [])
    {
        return Telegram::Request(
            'editMessageCaption',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public function editMessageMedia($chat_id, $datas = [])
    {
        return Telegram::Request(
            'editMessageMedia',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public function editMessageReplyMarkup($chat_id, $datas = [])
    {
        return Telegram::Request(
            'editMessageReplyMarkup',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public function stopPoll($chat_id, $datas = [])
    {
        return Telegram::Request(
            'stopPoll',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public function getFile($file_id)
    {
        return Telegram::Request('getFile', [
            'file_id' => $file_id
        ]);
    }

    public function getUserProfilePhotos($user_id, $datas = [])
    {
        return Telegram::Request(
            'getUserProfilePhotos',
            array_merge([
                'user_id' => $user_id
            ], $datas)
        );
    }

    public function answerInlineQuery($inline_query_id, $datas = [])
    {
        return Telegram::Request(
            'answerInlineQuery',
            array_merge([
                'inline_query_id' => $inline_query_id
            ], $datas)
        );
    }

    public function answerCallbackQuery($call_id, $text, $show_alert = false)
    {
        return Telegram::Request('answerCallbackQuery', [
            'callback_query_id' => $call_id,
            'text' => $text,
            'show_alert' => $show_alert
        ]);
    }

    public function editMessageLiveLocation($chat_id, $datas = [])
    {
        return Telegram::Request(
            'editMessageLiveLocation',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public function stopMessageLiveLocation($chat_id, $datas = [])
    {
        return Telegram::Request(
            'stopMessageLiveLocation',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public function sendInvoice($chat_id, $datas = [])
    {
        return Telegram::Request(
            'sendInvoice',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public function sendSticker($chat_id, $datas = [])
    {
        return Telegram::Request(
            'sendSticker',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public function answerShippingQuery($shipping_query_id, $datas = [])
    {
        return Telegram::Request(
            'answerShippingQuery',
            array_merge([
                'shipping_query_id' => $shipping_query_id
            ], $datas)
        );
    }

    public function answerPreCheckoutQuery($pre_checkout_query_id, $datas = [])
    {
        return Telegram::Request(
            'answerPreCheckoutQuery',
            array_merge([
                'pre_checkout_query_id' => $pre_checkout_query_id
            ], $datas)
        );
    }

    public function sendGame($chat_id, $datas = [])
    {
        return Telegram::Request(
            'sendGame',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public function banChatMember($chat_id, $datas = [])
    {
        return Telegram::Request(
            'banChatMember',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public function unbanChatMember($chat_id, $datas = [])
    {
        return Telegram::Request(
            'unbanChatMember',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public function restrictChatMember($chat_id, $datas = [])
    {
        return Telegram::Request(
            'restrictChatMember',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public function promoteChatMember($chat_id, $datas = [])
    {
        return Telegram::Request(
            'promoteChatMember',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public function setChatAdministratorCustomTitle($chat_id, $datas = [])
    {
        return Telegram::Request(
            'setChatAdministratorCustomTitle',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public function setChatPermissions($chat_id, $datas = [])
    {
        return Telegram::Request(
            'setChatPermissions',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public function exportChatInviteLink($chat_id, $datas = [])
    {
        return Telegram::Request(
            'exportChatInviteLink',
            [
                'chat_id' => $chat_id
            ]
        );
    }

    public function createChatInviteLink($chat_id, $datas = [])
    {
        return Telegram::Request(
            'createChatInviteLink',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public function editChatInviteLink($chat_id, $datas = [])
    {
        return Telegram::Request(
            'editChatInviteLink',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public function revokeChatInviteLink($chat_id, $invite_link)
    {
        return Telegram::Request(
            'revokeChatInviteLink',
            [
                'chat_id' => $chat_id,
                'invite_link' => $invite_link
            ]
        );
    }

    public function setChatPhoto($chat_id, $photo)
    {
        return Telegram::Request(
            'setChatPhoto',
            [
                'chat_id' => $chat_id,
                'photo' => $photo
            ]
        );
    }

    public function deleteChatPhoto($chat_id)
    {
        return Telegram::Request(
            'deleteChatPhoto',
            [
                'chat_id' => $chat_id
            ]
        );
    }

    public function setChatTitle($chat_id, $title)
    {
        return Telegram::Request(
            'setChatPhoto',
            [
                'chat_id' => $chat_id,
                'title' => $title
            ]
        );
    }

    public function setChatDescription($chat_id, $description)
    {
        return Telegram::Request(
            'setChatDescription',
            [
                'chat_id' => $chat_id,
                'description' => $description
            ]
        );
    }

    public function pinChatMessage($chat_id, $message_id, $disable_notification = false)
    {
        return Telegram::Request(
            'pinChatMessage',
            [
                'chat_id' => $chat_id,
                'message_id' => $message_id,
                'disable_notification' => $disable_notification
            ]
        );
    }

    public function unpinChatMessage($chat_id, $message_id)
    {
        return Telegram::Request(
            'unpinChatMessage',
            [
                'chat_id' => $chat_id,
                'message_id' => $message_id
            ]
        );
    }

    public function unpinAllChatMessages($chat_id)
    {
        return Telegram::Request(
            'unpinAllChatMessages',
            [
                'chat_id' => $chat_id
            ]
        );
    }

    public function leaveChat($chat_id)
    {
        return Telegram::Request(
            'leaveChat',
            [
                'chat_id' => $chat_id
            ]
        );
    }

    public function getChat($chat_id)
    {
        return Telegram::Request(
            'getChat',
            [
                'chat_id' => $chat_id
            ]
        );
    }

    public function getChatAdministrators($chat_id)
    {
        return Telegram::Request(
            'getChatAdministrators',
            [
                'chat_id' => $chat_id
            ]
        );
    }

    public function getChatMemberCount($chat_id)
    {
        return Telegram::Request(
            'getChatMemberCount',
            [
                'chat_id' => $chat_id
            ]
        );
    }

    public function getChatMember($chat_id, $user_id)
    {
        return Telegram::Request(
            'getChatMember',
            [
                'chat_id' => $chat_id,
                'user_id' => $user_id
            ]
        );
    }

    public function setChatStickerSet($chat_id, $sticker_set_name)
    {
        return Telegram::Request(
            'setChatStickerSet',
            [
                'chat_id' => $chat_id,
                'sticker_set_name' => $sticker_set_name
            ]
        );
    }

    public function deleteChatStickerSet($chat_id)
    {
        return Telegram::Request(
            'deleteChatStickerSet',
            [
                'chat_id' => $chat_id
            ]
        );
    }
}
