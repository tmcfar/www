<?php
require_once 'core/init.php';


$user = DB::getInstance()->get('app_user', array('username','=','Tom'));

if($user->count()) {
    echo 'No user';
} else {
    foreach($user->results() as $user) {
        echo $user->$username, '<br>';
    }
}




