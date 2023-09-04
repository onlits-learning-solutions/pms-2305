<?php

use PMS\Tests\UserTest;

require "../src/Models/User.php";
require "../src/Models/DatabaseContext.php";
require "../src/env.php";
require "UserTest.php";

// ------------------- UserTest -------------------------------
$userTest = new UserTest();
$userTest->testAuthenticate();


// ------------------ VehicleTest -----------------------------