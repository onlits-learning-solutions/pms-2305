<?php

namespace PMS\Models;

class Vehicle
{
    private string $vehicle_no;
    private string $owner_name;
    private string $vehicle_colour;
    private string $vehicle_type;
    private string $vehicle_model;

    public static function index(): array|null
    {
        $sql = "SELECT * FROM vehicle";
        $connection = DatabaseContext::getConnection();
        $result = $connection->query($sql);
        if ($result->num_rows > 0)
            return $result->fetch_all(MYSQLI_ASSOC);
        else
            return null;
    }

    public static function find(string $vehicle_no): array|null
    {
        $sql = "SELECT * FROM vehicle WHERE vehicle_no='$vehicle_no'";
        $connection = DatabaseContext::getConnection();
        $result = $connection->query($sql);
        if ($result->num_rows > 0)
            return $result->fetch_assoc();
        else
            return null;
    }

    public function save(array $vehicle)
    {
        $this->vehicle_no = $vehicle['vehicle_no'];
        $this->owner_name = $vehicle['owner_name'];
        $this->vehicle_colour = $vehicle['vehicle_colour'];
        $this->vehicle_type = $vehicle['vehicle_type'];
        $this->vehicle_model = $vehicle['vehicle_model'];
        $sql = "INSERT INTO vehicle(vehicle_no, owner_name, vehicle_colour, vehicle_type, vehicle_model) VALUES('$this->vehicle_no','$this->owner_name','$this->vehicle_colour','$this->vehicle_type','$this->vehicle_model')";
        $connection = DatabaseContext::getConnection();
        $connection->query($sql);
        header('Location:Vehicle.php');
    }

    public function update(array $vehicle)
    {
        $this->vehicle_no = $vehicle['vehicle_no'];
        $this->owner_name = $vehicle['owner_name'];
        $this->vehicle_colour = $vehicle['vehicle_colour'];
        $this->vehicle_type = $vehicle['vehicle_type'];
        $this->vehicle_model = $vehicle['vehicle_model'];
        $sql = "UPDATE vehicle SET vehicle_no='$this->vehicle_no', owner_name='$this->owner_name', vehicle_colour='$this->vehicle_colour', vehicle_type='$this->vehicle_type', vehicle_model='$this->vehicle_model' WHERE vehicle_no='$this->vehicle_no'";
        $connection = DatabaseContext::getConnection();
        $connection->query($sql);
        header('Location:Vehicle.php');
    }

    public function delete(string $vehicle_no)
    {
        $sql = "DELETE FROM vehicle WHERE vehicle_no='$vehicle_no'";
        $connection = DatabaseContext::getConnection();
        $connection->query($sql);
        header('Location:Vehicle.php');
    }

    public static function findVehicleNo(string $vehicle_no): array|null
    {
        $sql = "SELECT * FROM vehicle WHERE vehicle_no='$vehicle_no'";
        $connection = DatabaseContext::getConnection();
        $result = $connection->query($sql);
        if ($result->num_rows > 0)
            return $result->fetch_all(MYSQLI_ASSOC);
        else
            return null;
    }

    public static function findOwnerName(string $owner_name): array|null
    {
        $sql = "SELECT * FROM vehicle WHERE owner_name like '$owner_name%'";
        $connection = DatabaseContext::getConnection();
        $result = $connection->query($sql);
        if ($result->num_rows > 0)
            return $result->fetch_all(MYSQLI_ASSOC);
        else
            return null;
    }

    public static function findVehicleColour(string $vehicle_colour): array|null
    {
        $sql = "SELECT * FROM vehicle WHERE vehicle_colour like '$vehicle_colour%'";
        $connection = DatabaseContext::getConnection();
        $result = $connection->query($sql);
        if ($result->num_rows > 0)
            return $result->fetch_all(MYSQLI_ASSOC);
        else
            return null;
    }

    public static function findVehicleType(string $vehicle_type): array|null
    {
        $sql = "SELECT * FROM vehicle WHERE vehicle_type like '$vehicle_type%'";
        $connection = DatabaseContext::getConnection();
        $result = $connection->query($sql);
        if ($result->num_rows > 0)
            return $result->fetch_all(MYSQLI_ASSOC);
        else
            return null;
    }

    public static function findVehicleModel(string $vehicle_model): array|null
    {
        $sql = "SELECT * FROM vehicle WHERE vehicle_model like '$vehicle_model%'";
        $connection = DatabaseContext::getConnection();
        $result = $connection->query($sql);
        if ($result->num_rows > 0)
            return $result->fetch_all(MYSQLI_ASSOC);
        else
            return null;
    }
}
