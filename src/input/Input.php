<?php

/**
 * @author Elbek Khamdullaev (https://khamdullaev.uz)
 * @license MIT
 * @privacy Mualliflik huquqini hurmat qiling
 */

namespace Lib;

class Input
{
    public static function getContent($data)
    {
        return file_get_contents($data);
    }

    public static function exportJson($json, $array = false)
    {
        return json_decode($json, $array);
    }

    public static function getInput()
    {
        $input = self::exportJson(self::getContent('php://input'));
        if (!$input) {
            echo "No input!";
            exit;
        } else {
            return $input;
        }
    }
}
