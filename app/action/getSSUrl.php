<?php
/**
 * Created by PhpStorm.
 * User: GaoMingcheng
 * Date: 17/4/4
 * Time: 23:24
 */

$user_name = $_REQUEST["user_name"];
if (is_array($user_name)) {
    print_r($user_name);
}
echo $user_name. "\n";