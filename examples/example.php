<?php

/**
 * @author Elbek Khamdullaev (https://khamdullaev.uz)
 * @license MIT
 * @privacy Mualliflik huquqini hurmat qiling
 */

require_once __DIR__ . '/../src/loader.php';

use Lib\Input;
use Lib\Plugin;
use Lib\Runner;

$telegram = new Runner("API_KEY");

$input = Input::getInput();
if ($input->message) {
	$message = $input->message;
	$chat_id = $message->chat->id;
	$text = $message->text;
}

if ($input->callback_query) {
	$callback = $input->callback_query;
	$data = $callback->data;
	$callback_message = $callback->message;
	$callback_chat_id = $callback_message->chat->id;
	$callback_message_id = $callback_message->message_id;
}

$keyboard = Plugin::buildInlineKeyboard([
	[["Test", "inline"]],
]);

if ($text == "/start") {
	$telegram->sendMessage($chat_id, [
		'text' => "Salom",
		'reply_markup' => $keyboard
	]);
}

if ($input->callback_query->data == "inline") {
	$telegram->deleteMessage($callback_chat_id, $callback_message_id);
	$telegram->sendMessage($callback_chat_id, [
		'text' => "Ismingizni yozib yuboring:"
	]);
	Plugin::setSession($callback_chat_id, "ism");
}

if (Plugin::getSession($chat_id) == "ism") {
	$telegram->sendMessage($chat_id, [
		'text' => "Assalomu alaykum $text"
	]);
	Plugin::stopSession($chat_id);
}
