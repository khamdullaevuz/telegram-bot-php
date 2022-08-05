# Telegram bot php

![PHP](https://img.shields.io/badge/php-%3E%3D5.6-8892bf.svg)
![Redis](https://img.shields.io/badge/Redis-required-green.svg)

![GitHub forks](https://img.shields.io/github/forks/KhamdullaevUz/telegram-bot-php?style=flat)
![GitHub Repo stars](https://img.shields.io/github/stars/KhamdullaevUz/telegram-bot-php?style=flat)
![GitHub watchers](https://img.shields.io/github/watchers/KhamdullaevUz/telegram-bot-php?style=flat)

## Ishlatish

### Composer orqali yuklash

```bash
composer require khamdullaevuz/telegram-bot-php
```

#### Ulanish

```php
<?php
require 'vendor/autoload.php';

use Khamdullaevuz\Telegram;
use Khamdullaevuz\Plugin;

$telegram = new Telegram();

$input = Telegram::getInput();
if($input->message){
$message = $input->message;
$chat_id = $message->chat->id;
$text = $message->text;
}

$keyboard = Plugin::buildInlineKeyboard([
	[["Inline Keyboard test","inline"]],
]);

if($text == "/start"){
	$telegram->sendMessage($chat_id, [
		'text'=>"Salom",
		'reply_markup'=>$keyboard
	]);
}
```

# Konfiguratsiya

#### .env.example fayldan .env fayl yaratib olamiz

```bash
cp .env.example .env
```

#### .env faylga kerakli sozlamalarni yozib olamiz

### Examples

#### Example: [example](/examples/example.php)

## Created by: [Elbek Khamdullaev](https://khamdullaev.uz)
