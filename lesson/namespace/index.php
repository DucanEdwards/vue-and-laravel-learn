<?php
// 包含文件
// include 'config/app.php';

// 写入文件
// file_put_contents('demo.php','sagsfgsf');

//读出文件内容
// echo file_get_contents('demo.php');

//命名空间
// include 'app/User.php';
// include 'model/User.php';

include 'vendor/autoload.php';

use App\Controllers\User;
use App\Controllers\Group;
use Model\User as ModelUser;

$user = new User;
echo $user->show();

$group = new Group;
echo $group->create();

$model = new ModelUser;
echo $model->show();

