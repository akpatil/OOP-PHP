<?php
require_once 'core/init.php';

/*
echo Config::get('mysql/host');

$users = DB::getInstance()->query('SELECT username FROM users');
if($users->count())
{
	foreach($users as $user)
	{
		echo $user->username;
	}
}
*/
$db = new DB();
?>