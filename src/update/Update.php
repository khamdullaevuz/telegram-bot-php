<?php

/**
 * @author Elbek Khamdullaev (https://khamdullaev.uz)
 * @license MIT
 * @privacy Mualliflik huquqini hurmat qiling
 */

namespace Framework;

class Update
{
    public static function getJson($data)
    {
        return json_decode(file_get_contents($data));
    }

    public static function getInput()
    {
        $update = self::getJson('php://input');
        if (!$update) {
            echo "No updates!";
            exit;
        } else {
            return $update;
        }
    }
}
