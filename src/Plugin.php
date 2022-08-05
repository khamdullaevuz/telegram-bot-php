<?php

/**
 * @author Elbek Khamdullaev (https://khamdullaev.uz)
 * @license MIT
 * @privacy Mualliflik huquqini hurmat qiling
 */

namespace Khamdullaevuz;

class Plugin extends Telegram
{
    public static function buildKeyboard($datas = [], $resize = true)
    {
        $new_keyboard = [];
        $i = 0;
        foreach ($datas as $row) {
            foreach ($row as $button) {
                $new_keyboard[$i][] = ['text' => $button];
            }
            $i++;
        }

        return json_encode([
            'resize_keyboard' => $resize,
            'keyboard' => $new_keyboard
        ]);
    }

    public static function buildKeyboardCustom($datas = [], $resize = true)
    {
        return json_encode([
            'resize_keyboard' => $resize,
            'keyboard' => $datas
        ]);
    }

    public static function buildInlineKeyboard($datas = [])
    {
        $new_keyboard = [];
        $i = 0;
        foreach ($datas as $row) {
            foreach ($row as $button) {
                $new_keyboard[$i][] = ['text' => $button[0], 'callback_data' => $button[1]];
            }
            $i++;
        }

        return json_encode([
            'inline_keyboard' => $new_keyboard
        ]);
    }

    public static function buildInlineKeyboardCustom($datas = [])
    {
        return json_encode([
            'inline_keyboard' => $datas
        ]);
    }

    public static function connectRedis()
    {
        $dotenv = \Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
        $dotenv->load();
        $redis = new \Redis();
        $redis->connect($_ENV['REDIS_HOST'], $_ENV['REDIS_PORT']);
        return $redis;
    }

    public static function setSession($id, $session)
    {
        self::connectRedis()->set($id, $session);
    }

    public static function getSession($id)
    {
        return self::connectRedis()->get($id);
    }

    public static function stopSession($id)
    {
        self::connectRedis()->del($id);
    }
}
