<?php
session_start();
if (!isset($_SESSION['user_id']))
    header("location:../index.php?error=299");

$user_id = $_SESSION['user_id'];
?>
<div style="float:left; width:50%">
    <h1>Parking Management System</h1>
</div>
<div style="float:left; width:50%">
    <p><?= $user_id ?></p>
</div>