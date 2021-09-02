<?php

namespace Framework\DataBase;

class MySQL extends \MySQLi
{
	function __construct($hostname, $username, $password, $dbname)
	{
		return parent::__construct($hostname, $username, $password, $dbname);
	}
}

class SQLite extends \SQLite3
{
	function __construct($dbname)
	{
		return parent::__construct($dbname);
	}
}

class PDO extends \PDO
{
	function __construct($hostname, $username, $password, $dbname)
	{
		return parent::__construct('mysql:dbname=' . $dbname . ';host=' . $hostname, $username, $password);
	}
}
