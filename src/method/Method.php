<?php

/**
 * @author Elbek Khamdullaev (https://khamdullaev.uz)
 * @license MIT
 * @privacy Mualliflik huquqini hurmat qiling
 */

namespace Lib;

class Method
{
    public function sendMessage($chat_id, $datas = [])
    {
        return Runner::Request(
            'sendMessage',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public function getMe()
    {
        return Runner::Request('getme');
    }

    public function sendPhoto($chat_id, $datas = [])
    {
        return Runner::Request(
            'sendPhoto',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public function sendAudio($chat_id, $datas = [])
    {
        return Runner::Request(
            'sendAudio',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public function sendVideo($chat_id, $datas = [])
    {
        return Runner::Request(
            'sendVideo',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public function sendAction($chat_id, $action)
    {
        return Runner::Request('sendChatAction', [
            'chat_id' => $chat_id,
            'action' => $action
        ]);
    }

    public function sendDocument($chat_id, $datas = [])
    {
        return Runner::Request(
            'sendDocument',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public function sendAnimation($chat_id, $datas = [])
    {
        return Runner::Request(
            'sendAnimation',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public function sendVoice($chat_id, $datas = [])
    {
        return Runner::Request(
            'sendVoice',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public function sendVideoNote($chat_id, $datas = [])
    {
        return Runner::Request(
            'sendVideoNote',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public function sendMediaGroup($chat_id, $datas = [])
    {
        return Runner::Request(
            'sendMediaGroup',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public function sendLocation($chat_id, $datas = [])
    {
        return Runner::Request(
            'sendLocation',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public function sendVenue($chat_id, $datas = [])
    {
        return Runner::Request(
            'sendVenue',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public function sendContact($chat_id, $datas = [])
    {
        return Runner::Request(
            'sendContact',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public function sendPoll($chat_id, $datas = [])
    {
        return Runner::Request(
            'sendPoll',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public function sendDice($chat_id, $datas = [])
    {
        return Runner::Request(
            'sendDice',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public function copyMessage($chat_id, $datas = [])
    {
        return Runner::Request(
            'copyMessage',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public function forwardMessage($chat_id, $from_chat_id, $message_id)
    {
        return Runner::Request('forwardMessage', [
            'chat_id' => $chat_id,
            'from_chat_id' => $from_chat_id,
            'message_id' => $message_id
        ]);
    }

    public function deleteMessage($chat_id, $message_id)
    {
        return Runner::Request('deleteMessage', [
            'chat_id' => $chat_id,
            'message_id' => $message_id
        ]);
    }

    public function editMessageText($chat_id, $datas = [])
    {
        return Runner::Request(
            'editMessageText',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public function editMessageCaption($chat_id, $datas = [])
    {
        return Runner::Request(
            'editMessageCaption',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public function editMessageMedia($chat_id, $datas = [])
    {
        return Runner::Request(
            'editMessageMedia',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public function editMessageReplyMarkup($chat_id, $datas = [])
    {
        return Runner::Request(
            'editMessageReplyMarkup',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public function stopPoll($chat_id, $datas = [])
    {
        return Runner::Request(
            'stopPoll',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public function getFile($file_id)
    {
        return Runner::Request('getFile', [
            'file_id' => $file_id
        ]);
    }

    public function getUserProfilePhotos($user_id, $datas = [])
    {
        return Runner::Request(
            'getUserProfilePhotos',
            array_merge([
                'user_id' => $user_id
            ], $datas)
        );
    }

    public function answerInlineQuery($inline_query_id, $datas = [])
    {
        return Runner::Request(
            'answerInlineQuery',
            array_merge([
                'inline_query_id' => $inline_query_id
            ], $datas)
        );
    }

    public function answerCallback($call_id, $text, $show_alert = false)
    {
        return Runner::Request('answerCallbackQuery', [
            'callback_query_id' => $call_id,
            'text' => $text,
            'show_alert' => $show_alert
        ]);
    }

    public function editMessageLiveLocation($chat_id, $datas = [])
    {
        return Runner::Request(
            'editMessageLiveLocation',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public function stopMessageLiveLocation($chat_id, $datas = [])
    {
        return Runner::Request(
            'stopMessageLiveLocation',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public function sendInvoice($chat_id, $datas = [])
    {
        return Runner::Request(
            'sendInvoice',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public function sendSticker($chat_id, $datas = [])
    {
        return Runner::Request(
            'sendSticker',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public function answerShippingQuery($shipping_query_id, $datas = [])
    {
        return Runner::Request(
            'answerShippingQuery',
            array_merge([
                'shipping_query_id' => $shipping_query_id
            ], $datas)
        );
    }

    public function answerPreCheckoutQuery($pre_checkout_query_id, $datas = [])
    {
        return Runner::Request(
            'answerPreCheckoutQuery',
            array_merge([
                'pre_checkout_query_id' => $pre_checkout_query_id
            ], $datas)
        );
    }

    public function sendGame($chat_id, $datas = [])
    {
        return Runner::Request(
            'sendGame',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public function banChatMember($chat_id, $datas = [])
    {
        return Runner::Request(
            'banChatMember',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public function unbanChatMember($chat_id, $datas = [])
    {
        return Runner::Request(
            'unbanChatMember',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public function restrictChatMember($chat_id, $datas = [])
    {
        return Runner::Request(
            'restrictChatMember',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public function promoteChatMember($chat_id, $datas = [])
    {
        return Runner::Request(
            'promoteChatMember',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public function setChatAdministratorCustomTitle($chat_id, $datas = [])
    {
        return Runner::Request(
            'setChatAdministratorCustomTitle',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public function setChatPermissions($chat_id, $datas = [])
    {
        return Runner::Request(
            'setChatPermissions',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public function exportChatInviteLink($chat_id, $datas = [])
    {
        return Runner::Request(
            'exportChatInviteLink',
            [
                'chat_id' => $chat_id
            ]
        );
    }

    public function createChatInviteLink($chat_id, $datas = [])
    {
        return Runner::Request(
            'createChatInviteLink',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public function editChatInviteLink($chat_id, $datas = [])
    {
        return Runner::Request(
            'editChatInviteLink',
            array_merge([
                'chat_id' => $chat_id
            ], $datas)
        );
    }

    public function revokeChatInviteLink($chat_id, $invite_link)
    {
        return Runner::Request(
            'revokeChatInviteLink',
            [
                'chat_id' => $chat_id,
                'invite_link' => $invite_link
            ]
        );
    }

    public function setChatPhoto($chat_id, $photo)
    {
        return Runner::Request(
            'setChatPhoto',
            [
                'chat_id' => $chat_id,
                'photo' => $photo
            ]
        );
    }

    public function deleteChatPhoto($chat_id)
    {
        return Runner::Request(
            'deleteChatPhoto',
            [
                'chat_id' => $chat_id
            ]
        );
    }

    public function setChatTitle($chat_id, $title)
    {
        return Runner::Request(
            'setChatPhoto',
            [
                'chat_id' => $chat_id,
                'title' => $title
            ]
        );
    }

    public function setChatDescription($chat_id, $description)
    {
        return Runner::Request(
            'setChatDescription',
            [
                'chat_id' => $chat_id,
                'description' => $description
            ]
        );
    }

    public function pinChatMessage($chat_id, $message_id, $disable_notification = false)
    {
        return Runner::Request(
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
        return Runner::Request(
            'unpinChatMessage',
            [
                'chat_id' => $chat_id,
                'message_id' => $message_id
            ]
        );
    }

    public function unpinAllChatMessages($chat_id)
    {
        return Runner::Request(
            'unpinAllChatMessages',
            [
                'chat_id' => $chat_id
            ]
        );
    }

    public function leaveChat($chat_id)
    {
        return Runner::Request(
            'leaveChat',
            [
                'chat_id' => $chat_id
            ]
        );
    }

    public function getChat($chat_id)
    {
        return Runner::Request(
            'getChat',
            [
                'chat_id' => $chat_id
            ]
        );
    }

    public function getChatAdministrators($chat_id)
    {
        return Runner::Request(
            'getChatAdministrators',
            [
                'chat_id' => $chat_id
            ]
        );
    }

    public function getChatMemberCount($chat_id)
    {
        return Runner::Request(
            'getChatMemberCount',
            [
                'chat_id' => $chat_id
            ]
        );
    }

    public function getChatMember($chat_id, $user_id)
    {
        return Runner::Request(
            'getChatMember',
            [
                'chat_id' => $chat_id,
                'user_id' => $user_id
            ]
        );
    }

    public function setChatStickerSet($chat_id, $sticker_set_name)
    {
        return Runner::Request(
            'setChatStickerSet',
            [
                'chat_id' => $chat_id,
                'sticker_set_name' => $sticker_set_name
            ]
        );
    }

    public function deleteChatStickerSet($chat_id)
    {
        return Runner::Request(
            'deleteChatStickerSet',
            [
                'chat_id' => $chat_id
            ]
        );
    }
}
