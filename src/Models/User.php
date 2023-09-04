<?php

namespace PMS\Models;

class User
{
    private string $user_id;
    private string $password;

    public function __construct(array $user)
    {
        $this->user_id = $user['user_id'];
        $this->password = $user['password'];
    }

    public function setUserId(string $user_id): void
    {
        $this->user_id = $user_id;
    }

    public function getUserId(): string
    {
        return $this->user_id;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function authenticate(): string|null
    {
        $connection = DatabaseContext::getConnection();
        $sql = "SELECT user_id FROM user WHERE user_id='$this->user_id' AND password=SHA1('$this->password')";
        $result = $connection->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row['user_id'];
        } else {
            return null;
        }
    }
}
