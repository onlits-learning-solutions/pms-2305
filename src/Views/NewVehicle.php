<?php
require '../Models/Vechicle.php';
require '../Models/DatabaseContext.php';
require '../env.php';

use PMS\Models\Vehicle;

    if(isset($_POST['submit'])) {
        $vehicle = new Vehicle();
        $vehicle->save($_POST);
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMS - New Vehicle</title>
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
                <h1>New Vehicle</h1>
                <form action="" method="post" class="form-type-1">
                    <label for="vehicle_no">Vehicle Number</label>
                    <input type="text" name="vehicle_no" id="vehicle_no" maxlength="10" minlength="10">
                    <label for="owner_name">Owner Name</label>
                    <input type="text" name="owner_name" id="owner_name">
                    <label for="vehicle_colour">Vehicle Colour</label>
                    <input type="text" name="vehicle_colour" id="vehicle_colour">
                    <label for="vehicle_type">Vehicle Type</label>
                    <input type="text" name="vehicle_type" id="vehicle_type">
                    <label for="vehicle_model">Vehicle Model</label>
                    <input type="text" name="vehicle_model" id="vehicle_model">
                    <button name="submit">Submit</button>
                </form>
                <footer>
                    <?php include 'footer.php'; ?>
                </footer>
            </div>
        </main>
    </div>
</body>

</html>