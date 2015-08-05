<?php
require_once 'core/init.php';

$user = DB::getInstance()->get('users', array('username', '=', 'akshay'));

if(!$user->count())
{
	echo "No User";
}
else
{
	foreach($user->results() as $user)
	{
		echo $user->username, '<br />';
	}
}

?>