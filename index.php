<?php
require_once 'core/init.php';

/*
$user = DB::getInstance()->get('users', array('username', '=', 'akshay'));

if(!$user->count())
{
	echo "No User";
}
else
{
	echo $user->first()->username;
}

*/
/*
$user = DB::getInstance()->insert('users', array(
	'username' => 'Dale',
	'password' => 'password',
	'salt' => 'salt'
));
*/
$user = DB::getInstance()->update('users', 5, array(
	'password' => 'newpassword',
	'name' => 'DaleBitch'
));
?>