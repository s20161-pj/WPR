<?php
$servername = "localhost";
$username = "root";
$password = "root";
$schema = "wpr";

// Create connection
$conn = new mysqli($servername, $username, $password, $schema);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
echo "<br>";

$query = 'select id, name from animals';
$result = mysqli_query($conn,$query);

/* fetch object array */
while ($row = $result->fetch_row()) {
    printf("%s %s\n", $row[0], $row[1]);
}
$row = $result->fetch_array(MYSQLI_ASSOC);
printf("%s (%s)\n", $row["id"], $row["name"]);

if ($result = mysqli_query($conn, $query)) {
    $row_cnt = mysqli_num_rows($result);
    echo "<br>";
    printf("Result set has %d rows.\n", $row_cnt);
    mysqli_free_result($result);
}
$sql = "INSERT INTO animals (id, name)
VALUES ('8', 'kurczak')";
echo "</br>";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
