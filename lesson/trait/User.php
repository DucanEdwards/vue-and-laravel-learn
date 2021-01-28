<?php

include 'Permission.php';

class User {
    use Permission;
    public function init() {
        echo 33;
    }
}
$user=new User();
$user->check();