<?php

namespace Lib\Database;

class MySQL extends \MySQLi
{
	function __construct($hostname, $username, $password, $dbname)
	{
		return parent::__construct($hostname, $username, $password, $dbname);
	}
}
