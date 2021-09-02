<?php

/**
 * @author Elbek Khamdullaev (https://khamdullaev.uz)
 * @license MIT
 * @privacy Mualliflik huquqini hurmat qiling
 */

namespace Framework;

class Config
{
	protected static $config;

	public static function setApiToken($token)
	{
		self::$config = $token;
	}

	public static function getApiToken()
	{
		return self::$config;
	}
}
