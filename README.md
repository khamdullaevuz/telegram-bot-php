# Framework

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
require_once __DIR__.'/vendor/autoload.php';

use Framework\Config;
use Framework\Method;
use Framework\Plugin;
use Framework\Update;

Config::setApiToken("API_TOKEN");

$input = Update::getInput();
if($input->message){
$message = $input->message;
$chat_id = $message->chat->id;
$text = $message->text;
}

$keyboard = Plugin::buildInlineKeyboard([
	[["Inline Keyboard test","inline"]],
]);

if($text == "/start"){
	Method::sendMessage($chat_id, [
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
require_once __DIR__.'/src/loader.php';

use Framework\Config;
use Framework\Method;
use Framework\Plugin;
use Framework\Update;

Config::setApiToken("API_TOKEN");

$input = Update::getInput();
if($input->message){
$message = $input->message;
$chat_id = $message->chat->id;
$text = $message->text;
}

$keyboard = Plugin::buildInlineKeyboard([
	[["Inline Keyboard test","inline"]],
]);

if($text == "/start"){
	Method::sendMessage($chat_id, [
		'text'=>"Salom",
		'reply_markup'=>$keyboard
	]);
}
```

#### Ma'lumotlar bazasi bilan ishlash

Mavjud ma'lumotlar bazasi: mysqli, sqlite, pdo

```php
use Framework\DataBase\SQLite;
$db = new SQLite("my.db");
```

### Examples

#### Example: [example](/examples/example.php)

## Created by: [Elbek Khamdullaev](https://khamdullaev.uz)
