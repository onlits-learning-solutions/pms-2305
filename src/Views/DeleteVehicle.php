<?php

require '../Models/Vechicle.php';
require '../Models/DatabaseContext.php';
require '../env.php';

use PMS\Models\Vehicle;
use PMS\Models\Vehicle\Delete_Vehicle;

$vehicle = new Vehicle();
$vehicle->delete($_GET['vehicle_no']);