<?php

/**
 * @author Elbek Khamdullaev (https://khamdullaev.uz)
 * @license MIT
 * @privacy Mualliflik huquqini hurmat qiling
 */

namespace Framework;

class Method
{
    public static function sendMessage($chat_id, $datas = [])
    {
        return Framework::Request(
            'sendMessage',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public static function getMe()
    {
        return Framework::Request('getme');
    }

    public static function sendPhoto($chat_id, $datas = [])
    {
        return Framework::Request(
            'sendPhoto',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public static function sendAudio($chat_id, $datas = [])
    {
        return Framework::Request(
            'sendAudio',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public static function sendVideo($chat_id, $datas = [])
    {
        return Framework::Request(
            'sendVideo',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public static function sendAction($chat_id, $action)
    {
        return Framework::Request('sendChatAction', [
            'chat_id' => $chat_id,
            'action' => $action
        ]);
    }

    public static function sendDocument($chat_id, $datas = [])
    {
        return Framework::Request(
            'sendDocument',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public static function sendAnimation($chat_id, $datas = [])
    {
        return Framework::Request(
            'sendAnimation',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public static function sendVoice($chat_id, $datas = [])
    {
        return Framework::Request(
            'sendVoice',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public static function sendVideoNote($chat_id, $datas = [])
    {
        return Framework::Request(
            'sendVideoNote',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public static function sendMediaGroup($chat_id, $datas = [])
    {
        return Framework::Request(
            'sendMediaGroup',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public static function sendLocation($chat_id, $datas = [])
    {
        return Framework::Request(
            'sendLocation',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public static function sendVenue($chat_id, $datas = [])
    {
        return Framework::Request(
            'sendVenue',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public static function sendContact($chat_id, $datas = [])
    {
        return Framework::Request(
            'sendContact',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public static function sendPoll($chat_id, $datas = [])
    {
        return Framework::Request(
            'sendPoll',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public static function sendDice($chat_id, $datas = [])
    {
        return Framework::Request(
            'sendDice',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public static function copyMessage($chat_id, $datas = [])
    {
        return Framework::Request(
            'copyMessage',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public static function forwardMessage($chat_id, $from_chat_id, $message_id)
    {
        return Framework::Request('forwardMessage', [
            'chat_id' => $chat_id,
            'from_chat_id' => $from_chat_id,
            'message_id' => $message_id
        ]);
    }

    public static function deleteMessage($chat_id, $message_id)
    {
        return Framework::Request('deleteMessage', [
            'chat_id' => $chat_id,
            'message_id' => $message_id
        ]);
    }

    public static function editMessageText($chat_id, $datas = [])
    {
        return Framework::Request(
            'editMessageText',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public static function editMessageCaption($chat_id, $datas = [])
    {
        return Framework::Request(
            'editMessageCaption',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public static function editMessageMedia($chat_id, $datas = [])
    {
        return Framework::Request(
            'editMessageMedia',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public static function editMessageReplyMarkup($chat_id, $datas = [])
    {
        return Framework::Request(
            'editMessageReplyMarkup',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public static function stopPoll($chat_id, $datas = [])
    {
        return Framework::Request(
            'stopPoll',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public static function getFile($file_id)
    {
        return Framework::Request('getFile', [
            'file_id' => $file_id
        ]);
    }

    public static function getUserProfilePhotos($user_id, $datas = [])
    {
        return Framework::Request(
            'getUserProfilePhotos',
            array_merge([
                'user_id' => $user_id
            ], $datas)
        );
    }

    public static function answerInlineQuery($inline_query_id, $datas = [])
    {
        return Framework::Request(
            'answerInlineQuery',
            array_merge([
                'inline_query_id' => $inline_query_id
            ], $datas)
        );
    }

    public static function answerCallback($call_id, $text, $show_alert = false)
    {
        return Framework::Request('answerCallbackQuery', [
            'callback_query_id' => $call_id,
            'text' => $text,
            'show_alert' => $show_alert
        ]);
    }

    public static function editMessageLiveLocation($chat_id, $datas = [])
    {
        return Framework::Request(
            'editMessageLiveLocation',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public static function stopMessageLiveLocation($chat_id, $datas = [])
    {
        return Framework::Request(
            'stopMessageLiveLocation',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public static function sendInvoice($chat_id, $datas = [])
    {
        return Framework::Request(
            'sendInvoice',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public static function sendSticker($chat_id, $datas = [])
    {
        return Framework::Request(
            'sendSticker',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public static function answerShippingQuery($shipping_query_id, $datas = [])
    {
        return Framework::Request(
            'answerShippingQuery',
            array_merge([
                'shipping_query_id' => $shipping_query_id
            ], $datas)
        );
    }

    public static function answerPreCheckoutQuery($pre_checkout_query_id, $datas = [])
    {
        return Framework::Request(
            'answerPreCheckoutQuery',
            array_merge([
                'pre_checkout_query_id' => $pre_checkout_query_id
            ], $datas)
        );
    }

    public static function sendGame($chat_id, $datas = [])
    {
        return Framework::Request(
            'sendGame',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public static function banChatMember($chat_id, $datas = [])
    {
        return Framework::Request(
            'banChatMember',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public static function unbanChatMember($chat_id, $datas = [])
    {
        return Framework::Request(
            'unbanChatMember',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public static function restrictChatMember($chat_id, $datas = [])
    {
        return Framework::Request(
            'restrictChatMember',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public static function promoteChatMember($chat_id, $datas = [])
    {
        return Framework::Request(
            'promoteChatMember',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public static function setChatAdministratorCustomTitle($chat_id, $datas = [])
    {
        return Framework::Request(
            'setChatAdministratorCustomTitle',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public static function setChatPermissions($chat_id, $datas = [])
    {
        return Framework::Request(
            'setChatPermissions',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public static function exportChatInviteLink($chat_id, $datas = [])
    {
        return Framework::Request(
            'exportChatInviteLink',
            [
                'chat_id' => $chat_id
            ]
        );
    }

    public static function createChatInviteLink($chat_id, $datas = [])
    {
        return Framework::Request(
            'createChatInviteLink',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public static function editChatInviteLink($chat_id, $datas = [])
    {
        return Framework::Request(
            'editChatInviteLink',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public static function revokeChatInviteLink($chat_id, $invite_link)
    {
        return Framework::Request(
            'revokeChatInviteLink',
            [
                'chat_id' => $chat_id,
                'invite_link' => $invite_link
            ]
        );
    }

    public static function setChatPhoto($chat_id, $photo)
    {
        return Framework::Request(
            'setChatPhoto',
            [
                'chat_id' => $chat_id,
                'photo' => $photo
            ]
        );
    }

    public static function deleteChatPhoto($chat_id)
    {
        return Framework::Request(
            'deleteChatPhoto',
            [
                'chat_id' => $chat_id
            ]
        );
    }

    public static function setChatTitle($chat_id, $title)
    {
        return Framework::Request(
            'setChatPhoto',
            [
                'chat_id' => $chat_id,
                'title' => $title
            ]
        );
    }

    public static function setChatDescription($chat_id, $description)
    {
        return Framework::Request(
            'setChatDescription',
            [
                'chat_id' => $chat_id,
                'description' => $description
            ]
        );
    }

    public static function pinChatMessage($chat_id, $message_id, $disable_notification = false)
    {
        return Framework::Request(
            'pinChatMessage',
            [
                'chat_id' => $chat_id,
                'message_id' => $message_id,
                'disable_notification' => $disable_notification
            ]
        );
    }

    public static function unpinChatMessage($chat_id, $message_id)
    {
        return Framework::Request(
            'unpinChatMessage',
            [
                'chat_id' => $chat_id,
                'message_id' => $message_id
            ]
        );
    }

    public static function unpinAllChatMessages($chat_id)
    {
        return Framework::Request(
            'unpinAllChatMessages',
            [
                'chat_id' => $chat_id
            ]
        );
    }

    public static function leaveChat($chat_id)
    {
        return Framework::Request(
            'leaveChat',
            [
                'chat_id' => $chat_id
            ]
        );
    }

    public static function getChat($chat_id)
    {
        return Framework::Request(
            'getChat',
            [
                'chat_id' => $chat_id
            ]
        );
    }

    public static function getChatAdministrators($chat_id)
    {
        return Framework::Request(
            'getChatAdministrators',
            [
                'chat_id' => $chat_id
            ]
        );
    }

    public static function getChatMemberCount($chat_id)
    {
        return Framework::Request(
            'getChatMemberCount',
            [
                'chat_id' => $chat_id
            ]
        );
    }

    public static function getChatMember($chat_id, $user_id)
    {
        return Framework::Request(
            'getChatMember',
            [
                'chat_id' => $chat_id,
                'user_id' => $user_id
            ]
        );
    }

    public static function setChatStickerSet($chat_id, $sticker_set_name)
    {
        return Framework::Request(
            'setChatStickerSet',
            [
                'chat_id' => $chat_id,
                'sticker_set_name' => $sticker_set_name
            ]
        );
    }

    public static function deleteChatStickerSet($chat_id)
    {
        return Framework::Request(
            'deleteChatStickerSet',
            [
                'chat_id' => $chat_id
            ]
        );
    }
}
