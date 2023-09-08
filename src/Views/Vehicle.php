<?php
require '../Models/Vechicle.php';
require '../Models/DatabaseContext.php';
require '../env.php';

use PMS\Models\Vehicle;

$vehicles = Vehicle::index();

if ($vehicles == null)
    $vehicles = array();

if (isset($_GET['filter_vehicle_no']))
    $vehicles = Vehicle::findVehicleNo($_GET['filter_vehicle_no']);
elseif (isset($_GET['filter_owner_name']))
    $vehicles = Vehicle::findOwnerName($_GET['filter_owner_name']);
elseif (isset($_GET['filter_vehicle_colour']))
    $vehicles = Vehicle::findVehicleColour($_GET['filter_vehicle_colour']);
elseif (isset($_GET['filter_vehicle_type']))
    $vehicles = Vehicle::findVehicleType($_GET['filter_vehicle_type']);
elseif (isset($_GET['filter_vehicle_model']))
    $vehicles = Vehicle::findVehicleModel($_GET['filter_vehicle_model']);




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMS - Vehicle</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div class="container">
        <header class="top-nav">
            <?php include 'topnav.php'; ?>
        </header>
        <main class="main">
            <aside class="side-nav">
                <?php include 'sidenav.php' ?>
            </aside>
            <div class="main-content">
                <h2>Vehicle</h2>
                <a href="NewVehicle.php">New</a>
                <br> <br>
                <div class="grid-5">
                    <form action="">
                        <input type="text" name="filter_vehicle_no" id="filter_vehicle_no" placeholder="Vehicle No" onblur="form.submit()">
                    </form>
                    <form action="">
                        <input type="text" name="filter_owner_name" id="filter_owner_name" placeholder="Owner Name" onblur="form.submit()">
                    </form>
                    <form action="">
                        <input type="text" name="filter_vehicle_colour" id="filter_vehicle_colour" placeholder="Vehicle Colour" onblur="form.submit()">
                    </form>
                    <form action="">
                        <input type="text" name="filter_vehicle_type" id="filter_vehicle_type" placeholder="Vehicle Type" onblur="form.submit()">
                    </form>
                    <form action="">
                        <input type="text" name="filter_vehicle_model" id="filter_vehicle_model" placeholder="Vehicle Model" onblur="form.submit()">
                    </form>
                </div>
                <br>
                <table class="table" cellspacing="0">
                    <tr>
                        <th>Vehicle Number</th>
                        <th>Owner Name</th>
                        <th>Colour</th>
                        <th>Type</th>
                        <th>Model</th>
                        <th>Edit Vehicle</th>
                        <th>Delete vehicle</th>
                    </tr>
                    <?php
                    foreach ($vehicles as $vehicle) {
                    ?>
                        <tr>
                            <td><?= $vehicle['vehicle_no'] ?></td>
                            <td><?= $vehicle['owner_name'] ?></td>
                            <td><?= $vehicle['vehicle_colour'] ?></td>
                            <td><?= $vehicle['vehicle_type'] ?></td>
                            <td><?= $vehicle['vehicle_model'] ?></td>
                            <td><a href="EditVehicle.php?vehicle_no=<?= $vehicle['vehicle_no'] ?>">Edit</a></td>
                            <td><a href="DeleteVehicle.php?vehicle_no=<?= $vehicle['vehicle_no'] ?>">Delete</a></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
                <footer>
                    <?php include 'footer.php'; ?>
                </footer>
            </div>
        </main>
    </div>
</body>

</html>