<?php
require_once 'core/init.php';

$user = DB::getInstance()->get('users', array('username', '=', 'akshay'));

if(!$user->count())
{
	echo "No User";
}
else
{
	echo $user->first()->username;
}

?>