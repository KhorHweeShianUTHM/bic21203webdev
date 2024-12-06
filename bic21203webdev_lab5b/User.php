<?php
class User
{
    private $conn;

    // Constructor to initialize the database connection
    public function __construct($db)
    {
        $this->conn = $db;
    }

    // Helper function to handle errors
    private function handleError($stmt)
    {
        $error = $stmt ? $stmt->error : $this->conn->error;
        return "Error: " . $error;
    }

    // Create a new user
    public function createUser($matric, $name, $password, $role): bool|string
    {
        $password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (matric, name, password, role) VALUES (?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("ssss", $matric, $name, $password, $role);
            $result = $stmt->execute();

            $stmt->close();
            return $result ?: $this->handleError($stmt);
        }

        return $this->handleError(null);
    }

    // Read all users
    public function getUsers(): mysqli_result|bool
    {
        $sql = "SELECT matric, name, role FROM users";
        return $this->conn->query($sql);
    }

    // Read a single user by matric
    public function getUser($matric): array|string|null
    {
        $sql = "SELECT * FROM users WHERE matric = ?";
        $stmt = $this->conn->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("s", $matric);
            $stmt->execute();
            $result = $stmt->get_result();
            $user = $result->fetch_assoc();

            $stmt->close();
            return $user ?: null;
        }

        return $this->handleError(null);
    }

    // Update a user's information
    public function updateUser($matric, $name, $role): bool|string
    {
        $sql = "UPDATE users SET name = ?, role = ? WHERE matric = ?";
        $stmt = $this->conn->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("sss", $name, $role, $matric);
            $result = $stmt->execute();

            $stmt->close();
            return $result ?: $this->handleError($stmt);
        }

        return $this->handleError(null);
    }

    // Delete a user by matric
    public function deleteUser($matric): bool|string
    {
        $sql = "DELETE FROM users WHERE matric = ?";
        $stmt = $this->conn->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("s", $matric);
            $result = $stmt->execute();

            $stmt->close();
            return $result ?: $this->handleError($stmt);
        }

        return $this->handleError(null);
    }
}
