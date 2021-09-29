# Telegram bot php

![PHP](https://img.shields.io/badge/php-%3E%3D7.1-8892bf.svg)
![SQLite](https://img.shields.io/badge/SQLite3-required-green.svg)
![MySQLi](https://img.shields.io/badge/MySQLi-required-green.svg)
![PDO](https://img.shields.io/badge/PDO-required-green.svg)

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
require 'vendor/autoload.php';

use Lib\Runner;
use Lib\Input;
use Lib\Plugin;

$telegram = new Runner("API_KEY");

$input = Input::getInput();
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

### Github orqali yuklash

```bash
git clone https://github.com/khamdullaevuz/telegram-bot-php
cd telegram-bot-php
```

#### Ulanish

```php
require 'src/loader.php';

use Lib\Runner;
use Lib\Input;
use Lib\Plugin;

$telegram = new Runner("API_KEY");

$input = Input::getInput();
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

### Ma'lumotlar bazasi bilan ishlash

Mavjud ma'lumotlar bazasi: mysqli, sqlite, pdo

```php
use Lib\DB\SQLite;
$db = new SQLite("my.db");
```

### Examples

#### Example: [example](/examples/example.php)

## Created by: [Elbek Khamdullaev](https://khamdullaev.uz)
