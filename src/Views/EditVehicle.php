<?php
require '../Models/Vechicle.php';
require '../Models/DatabaseContext.php';
require '../env.php';

use PMS\Models\Vehicle;
use PMS\Models\Vehicle\Edit_Vehicle;

$vehicle = new Vehicle();
if (isset($_POST['submit'])) {
    $vehicle->update($_POST);
} else {
    $vehicle = $vehicle->find($_GET['vehicle_no']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMS - Edit Vehicle</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div class="container">
        <header class="top-nav">
            <?php include 'topnav.php'; ?>
        </header>
        <main class="main">
            <aside class="side-nav">
                <?php include 'sidenav.php' ?>``
            </aside>
            <div class="main-content">
                <h1>New Vehicle</h1>
                <form action="" method="post" class="form-type-1">
                    <label for="vehicle_no">Vehicle Number</label>
                    <input type="text" name="vehicle_no" id="vehicle_no" maxlength="10" minlength="10" value="<?= isset($vehicle['vehicle_no']) ? $vehicle['vehicle_no'] : null ?>">
                    <label for="owner_name">Owner Name</label>
                    <input type="text" name="owner_name" id="owner_name" value="<?= isset($vehicle['owner_name']) ? $vehicle['owner_name'] : null ?>">
                    <label for="vehicle_colour">Vehicle Colour</label>
                    <input type="text" name="vehicle_colour" id="vehicle_colour" value="<?= isset($vehicle['vehicle_colour']) ? $vehicle['vehicle_colour'] : null ?>">
                    <label for="vehicle_type">Vehicle Type</label>
                    <input type="text" name="vehicle_type" id="vehicle_type"value="<?= isset($vehicle['vehicle_type']) ? $vehicle['vehicle_type'] : null ?>">>
                    <label for="vehicle_model">Vehicle Model</label>
                    <input type="text" name="vehicle_model" id="vehicle_model"value="<?= isset($vehicle['vehicle_model']) ? $vehicle['vehicle_model'] : null ?>">>
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