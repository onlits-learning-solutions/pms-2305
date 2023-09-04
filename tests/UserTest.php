<?php
namespace PMS\Tests;

use PMS\Models\User;

class UserTest
{
    public function testAuthenticate()
    {
        $test_case = array("user_id"=>"root", "password"=>"123");
        $user = new User($test_case);
        $user_id = $user->authenticate();
        if(isset($user_id))
            echo $user_id;
        else
            echo "User not found";
    }
}