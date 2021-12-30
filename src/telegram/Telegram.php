<?php

/**
 * @author Elbek Khamdullaev (https://khamdullaev.uz)
 * @license MIT
 * @privacy Mualliflik huquqini hurmat qiling
 */

namespace Lib;

class Telegram extends Method
{
    private static $api_key;

    function __construct($api_key)
    {
        self::$api_key = $api_key;
    }

    public static function getInput()
    {
        $input = self::exportJson(self::getContent('php://input'));
        if (!$input) {
            echo "No input!";
        } else {
            return $input;
        }
    }

    public static function getContent($data)
    {
        return file_get_contents($data);
    }

    public static function exportJson($json, $array = false)
    {
        return json_decode($json, $array);
    }

    public static function Request($method, $datas = [])
    {
        $url = "https://api.telegram.org/bot" . self::$api_key . "/" . $method;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
        $res = curl_exec($ch);
        if (curl_error($ch)) {
            var_dump(curl_error($ch));
        } else {
            return json_decode($res);
        }
    }
}
