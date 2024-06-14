<?php
// Connect to the database
// Adjust the path to include the root directory
require __DIR__ . "/../vendor/autoload.php";

// Specify the path to the .env file relative to the root directory
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/../");
$dotenv->load();

$conn = new mysqli($_ENV["DATABASE_HOSTNAME"], $_ENV["DATABASE_USERNAME"], $_ENV["DATABASE_PASSWORD"], $_ENV["DATABASE_NAME"]);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch data from the table, including the active field
$sql = "SELECT id, field_name, active, last_updated FROM check_arena";
$result = $conn->query($sql);

// Close the connection
$conn->close();

// Return the result
echo json_encode($result->fetch_all(MYSQLI_ASSOC));
?>
